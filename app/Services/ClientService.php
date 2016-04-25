<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;

use acessoSystem\Entities\Client;
use acessoSystem\Entities\User;
use acessoSystem\Repositories\ClientRepository;
use acessoSystem\Repositories\RoleRepository;
use acessoSystem\Repositories\UserRepository;


class ClientService
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var RoleRepository
     */
    private $roleRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository,RoleRepository $roleRepository)
    {


        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }


    public function create(array $data)
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

            //$this->authService->passwordSend($data);

        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }


        return $user;
    }



    public function update(array $data,$id)
    {

        $this->clientRepository->update($data,$id);
        $userId = $this->clientRepository->find($id,['user_id'])->user_id;
        $this->userRepository->update($data['user'],$userId);
    }

}