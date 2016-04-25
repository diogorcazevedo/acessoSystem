<?php

namespace acessoSystem\Http\Controllers\BancoItens\Admin;

use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\BancaRepository;
use acessoSystem\Http\Requests\BancaRequest;

class BancasController extends Controller
{


    /**
     * @var BancaRepository
     */
    private $repository;

    public function __construct(BancaRepository $repository)

    {

        $this->repository = $repository;
    }


    public function index()
    {
        $sponsors= $this->repository->paginate(5);
        $sponsors->setPath('bancas');

          return view('bancoItens.admin.index',compact('bancas'));

    }

    public function create()
    {

        return view('admin.bancas.create');

    }

    public function store(BancaRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.bancas.index');
    }

    public function edit($id)
    {
        $sponsor = $this->repository->find($id);

        return view('admin.bancas.edit',compact('sponsor'));

    }
    public function update(BancaRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.bancas.index');
    }

    public function destroy($id)
    {

        $this->repository->delete($id);

        return redirect()->route('admin.bancas.index');
    }
}
