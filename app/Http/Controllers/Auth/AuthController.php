<?php

namespace acessoSystem\Http\Controllers\Auth;

use acessoSystem\Entities\User;
use acessoSystem\Repositories\RoleRepository;
use acessoSystem\Services\AuthService;
use acessoSystem\Validators\UserValidator;
use Illuminate\Support\Facades\Validator;
use acessoSystem\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use acessoSystem\Entities\Client;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    /**
     * @var AuthService
     */
    private $authService;
    /**
     * @var RoleRepository
     */
    private $roleRepository;
    /**
     * @var UserValidator
     */
    private $userValidator;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(AuthService $authService, RoleRepository $roleRepository,UserValidator $userValidator)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->authService = $authService;
        $this->roleRepository = $roleRepository;
        $this->userValidator = $userValidator;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,$this->userValidator->rules(),$this->userValidator->messages());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        \DB::beginTransaction();
        try {
        $password = bcrypt($data['password']);

        $user = User::create([
                    'name'                  => mb_strtoupper($data['name']),
                    'email'                 => $data['email'],
                    'cpf'                   => $data['cpf'],
                    'identity'              => $data['identity'],
                    'password'              => $password,
                ]);

        $data['user_id'] = $user['id'];
        $birthdate = implode("-",array_reverse(explode("-",$data['birthdate'])));

                Client::create([
                    'user_id'               => $data['user_id'],
                    'birthdate'             => $birthdate,
                    'phone'                 => $data['phone'],
                    'cel'                   => $data['cel'],
                    'gender'                => $data['gender'],
                    'maritalstatus'         => $data['maritalstatus'],
                    'mother'                => mb_strtoupper($data['mother']),
                    'father'                => mb_strtoupper($data['father']),
                    'nationality'           => $data['nationality'],
                    'naturality'            => $data['naturality'],
                    'children'              => $data['children'],
                    'zipcode'               => $data['zipcode'],
                    'address'               => $data['address'],
                    'neighborhood'          => $data['neighborhood'],
                    'complement'            => $data['complement'],
                    'city'                  => $data['city'],
                    'state'                 => $data['state'],

                ]);

                    $role = $this->roleRepository->find(5);
                    $user->addRole($role);

            \DB::commit();

                $this->authService->passwordSend($data);

        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }

        Session::put('success', 'Cadastrado com sucesso');
        return $user;

    }
}
