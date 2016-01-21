<?php

namespace acessoSystem\Http\Controllers\Auth;

use acessoSystem\Entities\User;
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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                         => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'email'                        => 'required|email|max:255|unique:users',
            'cpf'                          => 'required|max:255|unique:users',
            'password'                     => 'required|confirmed|min:6',
            'identity'                     =>'required',
            'birthdate'                    =>'required',
            'phone'                        =>'required',
            'cel'                          =>'required',
            'gender'                       =>'required',
            'maritalstatus'                =>'required',
            'mother'                       =>'required',
            'father'                       =>'required',
            'nationality'                  =>'required',
            'naturality'                   =>'required',
            'children'                     =>'required',
            'zipcode'                      =>'required',
            'address'                      =>'required',
            'neighborhood'                 =>'required',
            'complement'                   =>'required',
            'city'                         =>'required',
            'state'                        =>'required',
        ]);
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
        $user = User::create([
                    'name'                  => $data['name'],
                    'email'                 => $data['email'],
                    'cpf'                   => $data['cpf'],
                    'identity'              => $data['identity'],
                    'password'              => bcrypt($data['password']),
                ]);

        $data['user_id'] = $user['id'];

                Client::create([
                    'user_id'               => $data['user_id'],
                    'birthdate'             => $data['birthdate'],
                    'phone'                 => $data['phone'],
                    'cel'                   => $data['cel'],
                    'gender'                => $data['gender'],
                    'maritalstatus'         => $data['maritalstatus'],
                    'mother'                => $data['mother'],
                    'father'                => $data['father'],
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

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }

        Session::put('success', 'Corrigida com sucesso');
        return $user;

    }
}
