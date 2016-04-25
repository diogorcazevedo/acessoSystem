<?php

namespace acessoSystem\Http\Controllers\Admin\System;


use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\PermissionRepository;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * @var PermissionRepository
     */
    private $repository;


    public function __construct(PermissionRepository $repository)
    {
       // $this->authorize('permission_admin');

        $this->repository = $repository;
        $this->authorize('permission_admin');
    }


    public function index()
    {
        $permissions =$this->repository->paginate();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {

        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {

        $this->repository->create($request->all());
        return redirect()->route('admin.permissions.index');

        //return redirect()->back();
    }

    public function edit($id)
    {

        $permission = $this->repository->find($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {

        $this->repository->find($id)->update($request->all());

        return redirect()->route('admin.permissions.index');


    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();

        return redirect()->back();

    }
}
