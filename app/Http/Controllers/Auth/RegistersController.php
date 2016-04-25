<?php

namespace acessoSystem\Http\Controllers\Auth;

use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Http\Requests\RegisterUserRequest;
use acessoSystem\Services\ClientService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use acessoSystem\Http\Requests\AuthRequest;


class RegistersController extends Controller
{

    /**
     * @var ProjectRepository
     */
    private $projectRepository;
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct(ProjectRepository $projectRepository,
                                ClientService $clientService)

    {
        $this->projectRepository = $projectRepository;
        $this->clientService = $clientService;
    }


    public function create($id)
    {

        return view('registers.create',compact('id'));

    }

    public function store(RegisterUserRequest $request)
    {
        $data = $request->all();
        $user = $this->clientService->create($data);
        Session::put('success', 'Alterado com sucesso');
        Auth::login($user);
        return redirect()->route('entries.create',['id'=>$data['project_id']]);
    }

    public function login($id)
    {
        return view('registers.login',compact('id'));
    }

    public function auth(AuthRequest $request)
    {
        $data =$request->all();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']]))
        {
            return redirect()->route('entries.create',['id'=>$data['project_id']]);
        }
           Session::put('error', 'Usuário e senha não conferem');
           return redirect()->route('registers.login',['id'=>$data['project_id']]);
    }

}
