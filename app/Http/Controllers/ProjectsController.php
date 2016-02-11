<?php

namespace acessoSystem\Http\Controllers;



use acessoSystem\Http\Requests;
use acessoSystem\Http\Requests\ProjectRequest;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Repositories\ProtocolRepository;


class ProjectsController extends Controller
{


    /**
     * @var ProjectRepository
     */
    private $repository;
    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;

    public function __construct(ProjectRepository $repository, ProtocolRepository $protocolRepository )

    {


        $this->repository = $repository;
        $this->protocolRepository = $protocolRepository;
    }


    public function index()
    {
        $projects= $this->repository->paginate(5);
        $projects->setPath('projects');

          return view('admin.projects.index',compact('projects'));

    }

    public function create()
    {
        $protocols =  $this->protocolRepository->lists();


        return view('admin.projects.create',compact('protocols'));

    }

    public function store(ProjectRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.projects.index');
    }

    public function edit($id)
    {
        $project = $this->repository->find($id);
        $protocols =  $this->protocolRepository->lists();

        return view('admin.projects.edit',compact('project','protocols'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.projects.index');
    }
}
