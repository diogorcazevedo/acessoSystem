<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Entities\User;
use acessoSystem\Repositories\ClientRepository;
use acessoSystem\Repositories\UserRepository;
use acessoSystem\Http\Requests\UserRequest;
use acessoSystem\Http\Requests\PasswordRequest;
use acessoSystem\Http\Requests\RoleRequest;
use acessoSystem\Http\Requests;
use acessoSystem\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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


    public function __construct(UserRepository $repository, ClientRepository $clientRepository, ClientService $clientService)

    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
        $this->clientService = $clientService;
    }


    public function index(Request $requests)
    {
        $users = $this->repository->paginate(5);
        $name = $requests->input('name');
        $email = $requests->input('email');
        if (!empty($name)) {
            $users = User::where('name', 'LIKE', '%' . $name . '%')->paginate(5);
        }
        if (!empty($email)) {
            $users = User::where('email', 'LIKE', '%' . $email . '%')->paginate(5);
        }
        $users->setPath('users');

        return view('admin.users.index', compact('users'));

    }

    //edit
    public function edit($id)
    {
        $client = $this->clientRepository->find($id);
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
        $this->clientService->update($data, $id);
        Session::put('success', 'Alterado com sucesso');
        return redirect()->route('admin.users.index');
    }


    public function updatepassword(PasswordRequest $request, $id)
    {
        $data = $request->all();
        $encrypt = $data['password'];
        $data['password'] = bcrypt($encrypt);
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