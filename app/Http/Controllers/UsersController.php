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
    /**
     * @var User
     */
    private $user;


    public function __construct(UserRepository $repository,
                                ClientRepository $clientRepository,
                                ClientService $clientService,
                                User $user)

    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
        $this->clientService = $clientService;
        $this->user = $user;
    }


    public function index(Request $requests)
    {
        $users = $this->repository->paginate(5);
        $source = $requests->input('source');
        if (!empty($source)) {
            $users = $this->user->where('name', 'LIKE', '%' . $source . '%')
                                ->orWhere('email', 'LIKE', '%' . $source . '%')
                                ->paginate(5);
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