<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Repositories\ProtocolFileRepository;
use acessoSystem\Repositories\ProtocolRepository;
use acessoSystem\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use acessoSystem\Http\Requests\ProtocolFileRequest;


class ProtocolsFileController extends Controller
{


    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;
    /**
     * @var ProtocolFileRepository
     */
    private $repository;

    public function __construct(ProtocolRepository $protocolRepository, ProtocolFileRepository $repository)
    {


        $this->protocolRepository = $protocolRepository;
        $this->repository = $repository;
    }

    public function index($id)
    {

        $protocol = $this->protocolRepository->find($id);

        return view('admin.protocolFile.index', compact('protocol'));
    }

    public function create($id)
    {

        $protocol = $this->protocolRepository->find($id);

        return view('admin.protocolFile.create', compact('protocol'));
    }


    public function store(ProtocolFileRequest $request, $id)
    {
        $type = $request->type;
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $this->repository->create(['protocol_id' => $id, 'extension' => $extension,'type' => $type ]);

        Storage::disk('local_protocols')->put($image->id . '.' . $extension, File::get($file));

        return redirect()->route('admin.protocolsfile.index', ['id' => $id]);
    }

    public function destroy($id)
    {

        $file = $this->repository->find($id);

        if(file_exists(public_path().'/uploads/protocols/'.$file->id . '.' . $file->extension)){
            Storage::disk('local_protocols')->delete($file->id . '.' . $file->extension);
        }

        $protocol = $file->protocol;
        $file->delete();

        return redirect()->route('admin.protocolsfile.index', ['id' => $protocol->id]);
    }
}
