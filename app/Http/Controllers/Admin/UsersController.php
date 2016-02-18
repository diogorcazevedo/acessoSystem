<?php

namespace acessoSystem\Http\Controllers\Admin;


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


class UsersController extends Controller
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


    public function index(Request $requests)
    {
        $users = $this->repository->paginate(5);
        $search = $requests->input('search');
        if (!empty($search)) {
           $users = $this->repository->whereSearchUser($search);
        }
        $users->setPath('users');

        return view('admin.users.index', compact('users'));

    }

    //edit
    public function edit($id)
    {
        $client = $this->clientRepository->findByField('user_id',$id)->first();

        return view('admin.users.edit', compact('client'));

    }

    public function role($id)
    {
        $user = $this->repository->find($id);

        return view('admin.users.role', compact('user'));
    }


    public function password($id)
    {
        $user = $this->repository->find($id);

        return view('admin.users.password', compact('user'));
    }


    //UPDATES

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $data['birthdate'] = birthdate($data['birthdate']);
        $this->clientService->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('admin.users.index');
    }


    public function updatepassword(PasswordRequest $request, $id)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $this->repository->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('admin.users.index');
    }


    public function updaterole(RoleRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('admin.users.index');
    }


}