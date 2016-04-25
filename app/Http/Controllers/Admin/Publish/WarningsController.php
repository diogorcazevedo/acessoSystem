<?php

namespace acessoSystem\Http\Controllers\Admin\Publish;

use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Http\Requests\WarningRequest;
use acessoSystem\Repositories\ProtocolRepository;
use acessoSystem\Repositories\WarningRepository;


class WarningsController extends Controller
{


    /**
     * @var WarningRepository
     */
    private $repository;
    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;

    public function __construct(WarningRepository $repository, ProtocolRepository $protocolRepository)

    {

        $this->repository = $repository;
        $this->protocolRepository = $protocolRepository;
    }


    public function index()
    {
        $warnings= $this->repository->paginate(5);
        $warnings->setPath('protocols');

          return view('admin.warnings.index',compact('warnings'));

    }

    public function create()
    {
        $protocols =  $this->protocolRepository->lists();


        return view('admin.warnings.create',compact('protocols'));

    }

    public function store(WarningRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.warnings.index');
    }

    public function edit($id)
    {
        $warning = $this->repository->find($id);
        $protocols =  $this->protocolRepository->lists();

        return view('admin.warnings.edit',compact('warning','protocols'));
    }

    public function update(WarningRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.warnings.index');
    }
}
