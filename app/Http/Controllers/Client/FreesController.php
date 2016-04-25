<?php

namespace acessoSystem\Http\Controllers\Client;

use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Repositories\FreeRepository;
use acessoSystem\Repositories\UserRepository;
use acessoSystem\Http\Requests\FreesRequest;
use acessoSystem\Services\FreeService;
use Illuminate\Support\Facades\Session;


class FreesController extends Controller
{


    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var FreeRepository
     */
    private $freeRepository;
    /**
     * @var EntryRepository
     */
    private $entryRepository;
    /**
     * @var FreeService
     */
    private $freeService;

    public function __construct(UserRepository $repository,
                                FreeRepository $freeRepository,
                                EntryRepository $entryRepository,
                                FreeService $freeService)

    {

        $this->repository = $repository;
        $this->freeRepository = $freeRepository;
        $this->entryRepository = $entryRepository;
        $this->freeService = $freeService;
    }


    public function create($id,$entry_id)
    {

        $user = $this->repository->find($id);
        $entry = $this->entryRepository->find($entry_id);

        return view('clients.frees.create',compact('user','entry'));

    }

    public function store(FreesRequest $request,$entry_id)
    {
        $data = $request->all();
        $this->freeService->store($data,$entry_id);
        return redirect()->route('layout.client');
    }

    public function edit($id)
    {
        $free = $this->freeRepository->findWhere(['user_id'=>$id])->first();

        return view('clients.frees.edit',compact('free'));
    }

    public function update(FreesRequest $request, $id)
    {
        $data = $request->all();
        $this->freeRepository->update($data,$id);
        Session::put('success', 'Recurso enviado com sucesso');

        return redirect()->route('layout.client');
    }
}
