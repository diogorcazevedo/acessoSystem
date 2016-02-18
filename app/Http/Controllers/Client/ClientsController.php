<?php

namespace acessoSystem\Http\Controllers\Client;


use acessoSystem\Repositories\ClientRepository;
use acessoSystem\Repositories\UserRepository;
use acessoSystem\Http\Requests\UserRequest;
use acessoSystem\Http\Requests\PasswordRequest;
use acessoSystem\Http\Requests\RoleRequest;
use acessoSystem\Http\Requests;
use acessoSystem\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use acessoSystem\Http\Controllers\Controller;


class ClientsController extends Controller
{


    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var ClientService
     */
    private $clientService;



    public function __construct(UserRepository $repository,
                                ClientRepository $clientRepository,
                                ClientService $clientService)

    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
        $this->clientService = $clientService;
    }


    //edit
    public function edit($id)
    {
        $client = $this->clientRepository->findByField('user_id',$id)->first();
        return view('clients.client.edit', compact('client'));

    }

    public function password($id)
    {
        $user = $this->repository->find($id);

        return view('clients.client.password', compact('user'));
    }


    //UPDATES

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $data['birthdate'] = birthdate($data['birthdate']);
        $this->clientService->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('layout.client');
    }


    public function updatepassword(PasswordRequest $request, $id)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $this->repository->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('layout.client');
    }


}