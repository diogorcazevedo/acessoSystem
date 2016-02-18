<?php

namespace acessoSystem\Http\Controllers\Admin;

use acessoSystem\Entities\Permission;
use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Entities\Role;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\PermissionRepository;
use acessoSystem\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    /**
     * @var RoleRepository
     */
    private $repository;
    /**
     * @var PermissionRepository
     */
    private $permissionRepository;


    public function __construct(RoleRepository $repository,PermissionRepository $permissionRepository)
    {
        //$this->authorize('role_admin');


        $this->repository = $repository;
        $this->permissionRepository = $permissionRepository;
    }


    public function index()
    {
        $roles = $this->repository->all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {

        return view('admin.roles.create');
    }

    public function store(Request $request)
    {

        $this->repository->create($request->all());
        return redirect()->route('admin.roles.index');

    }

    public function edit($id)
    {

        $role = $this->repository->find($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {

        $this->repository->find($id)->update($request->all());

        return redirect()->route('admin.roles.index');


    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();

        return redirect()->back();

    }


    public function permissions($id)
    {
        $role = $this->repository->find($id);
        $permissions =  $this->permissionRepository->lists();

        return view('admin.roles.permissons', compact('role', 'permissions'));
    }


    public function storePermissions(Request $request, $id)
    {

        $role = $this->repository->find($id);
        $permission = $this->permissionRepository->find($request->all()['permission_id']);
        $role->addPermission($permission);
        return redirect()->back();

    }

    public function revokePermissions($id, $permission_id)
    {
        $role = $this->repository->find($id);
        $permission = $this->permissionRepository->find($permission_id);
        $role->revokePermission($permission);

        return redirect()->back();
    }
}
