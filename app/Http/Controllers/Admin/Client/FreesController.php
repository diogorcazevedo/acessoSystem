<?php

namespace acessoSystem\Http\Controllers\Admin\Client;


use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\FreeRepository;
use acessoSystem\Http\Requests\FreesRequest;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Services\FreeService;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



class FreesController extends Controller
{


    /**
     * @var FreeRepository
     */
    private $repository;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;
    /**
     * @var FreeService
     */
    private $freeService;

    public function __construct(FreeRepository $repository,
                                ProjectRepository $projectRepository,
                                FreeService $freeService)

    {


        $this->repository = $repository;
        $this->projectRepository = $projectRepository;
        $this->freeService = $freeService;
    }


    public function index(Request $request,$id)
    {
        $project = $this->projectRepository->find($id);
        $frees = $this->freeService->searchIndex($id);

        $search = $request->input('search');

            if(!empty($search)){
                $frees = $this->freeService->search($search,$id);
            }

        return view('admin.frees.index', compact('frees','project'));

    }


    public function edit($id)
    {
        $free = $this->repository->findWhere(['user_id'=>$id])->first();

        return view('admin.frees.edit',compact('free'));
    }

    public function update(FreesRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);
        Session::put('success', 'Editado com sucesso');
        return redirect()->route('admin.layout.admin');
    }

    public function export($id)
    {
        $file = $this->freeService->query($id);
        return response()->download($file);

    }



}
