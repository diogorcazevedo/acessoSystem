<?php

namespace acessoSystem\Http\Controllers\Admin\System;



use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\RoleRepository;
use acessoSystem\Repositories\UserRepository;
use acessoSystem\Services\UserService;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

    /**
     * @var RoleRepository
     */
    private $roleRepository;
    /**
     * @var UserRepository
     */
    private $repository;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(RoleRepository $roleRepository,
                                UserRepository $repository,
                                UserService $userService)
    {
        $this->repository = $repository;
        $this->roleRepository = $roleRepository;
        $this->userService = $userService;
    }

        public function index(Request $requests)
    {
        // $this->authorize('user_list');

        $users = $this->repository->whereInSearchManager();

        $search= $requests->input('search');

        if(!empty($search)){
            $users = $this->userService->search($search);
        }

        return view('admin.managers.index', compact('users'));

    }


    public function roles($id)
    {
        //$this->authorize('user_view_roles');
        $user = $this->repository->find($id);
        $roles = $this->roleRepository->lists('name','id');
        return view('admin.managers.roles', compact('user','roles'));
    }


    public function storeRoles(Request $request,$id)
    {
       // $this->authorize('user_add_role');
        $user = $this->repository->find($id);
        $role = $this->roleRepository->find($request->all()['role_id']);
        $user->addRole($role);
        return redirect()->back();

    }

    public function revokeRoles($id,$role_id)
    {
        //$this->authorize('user_revoke_role');
        $user = $this->repository->find($id);
        $role =$this->roleRepository->find($role_id);
        $user->revokeRole($role);
        return redirect()->back();
    }

}
