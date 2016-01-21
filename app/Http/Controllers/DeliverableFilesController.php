<?php

namespace acessoSystem\Http\Controllers;



use acessoSystem\Http\Requests;
use acessoSystem\Repositories\DeliverableFilesRepository;
use acessoSystem\Repositories\DeliverableRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use acessoSystem\Http\Requests\DeliverableFilesRequest;



class DeliverableFilesController extends Controller
{


    /**
     * @var DeliverableFilesRepository
     */
    private $repository;
    /**
     * @var DeliverableRepository
     */
    private $deliverablesRepository;

    public function __construct(DeliverableFilesRepository $repository, DeliverableRepository $deliverablesRepository)
    {


        $this->repository = $repository;
        $this->deliverablesRepository = $deliverablesRepository;
    }

    public function index($id)
    {

        $deliverable = $this->deliverablesRepository->find($id);

        return view('admin.deliverableFiles.index', compact('deliverable'));
    }

    public function create($id)
    {

        $deliverable = $this->deliverablesRepository->find($id);

        return view('admin.deliverableFiles.create', compact('deliverable'));
    }


    public function store(DeliverableFilesRequest $request, $id)
    {
        $name = $request->name;
        $publishable = $request->publishable;
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $this->repository->create(['deliverable_id' => $id, 'extension' => $extension,'publishable' => $publishable,'name'=>$name ]);

        Storage::disk('local_deliverables')->put($image->id . '.' . $extension, File::get($file));

        return redirect()->route('admin.deliverablefiles.index', ['id' => $id]);
    }

    public function destroy($id)
    {

        $file = $this->repository->find($id);

        if(file_exists(public_path().'/uploads/deliverables/'.$file->id . '.' . $file->extension)){
            Storage::disk('local_deliverables')->delete($file->id . '.' . $file->extension);
        }

        $deliverable = $file->deliverable;
        $file->delete();

        return redirect()->route('admin.deliverablefiles.index', ['id' => $deliverable->id]);
    }
}
