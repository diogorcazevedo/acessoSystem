<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Http\Requests\SponsorRequest;
use acessoSystem\Repositories\SponsorRepository;
use acessoSystem\Http\Requests;
use Illuminate\Support\Facades\Request;

class SponsorsController extends Controller
{


    /**
     * @var SponsorRepository
     */
    private $repository;


    public function __construct(SponsorRepository $repository)

    {

        $this->repository = $repository;

    }


    public function index()
    {
        $sponsors= $this->repository->paginate(5);
        $sponsors->setPath('sponsors');

          return view('admin.sponsors.index',compact('sponsors'));

    }

    public function create()
    {

        return view('admin.sponsors.create');

    }

    public function store(SponsorRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.sponsors.index');
    }

    public function edit($id)
    {
        $sponsor = $this->repository->find($id);

        return view('admin.sponsors.edit',compact('sponsor'));

    }
    public function update(SponsorRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.sponsors.index');
    }

    public function destroy($id)
    {

        $this->repository->delete($id);

        return redirect()->route('admin.sponsors.index');
    }
}
