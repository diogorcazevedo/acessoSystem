<?php

namespace acessoSystem\Http\Controllers\Auth;

use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Repositories\UserRepository;
use Illuminate\Foundation\Auth\ResetsPasswords;
use acessoSystem\Http\Requests\RescueRequest;
use Illuminate\Support\Facades\Session;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest');
        $this->userRepository = $userRepository;
    }

    public function rescue()
    {

        return view('auth.passwords.rescue');

    }
    public function email(RescueRequest $request)
    {
        $data =$request->all();

        $user = $this->userRepository->findWhere(['cpf'=>$data['cpf']])->first();

        if (!empty($user))
        {
            Session::put('error','email cadastrado para este CPF: '.$user->email);
            return redirect('/password/reset');
        }
        Session::put('error', 'CPF: '.$data['cpf']. ' não encontrado');
        return redirect('/register');

    }
}
