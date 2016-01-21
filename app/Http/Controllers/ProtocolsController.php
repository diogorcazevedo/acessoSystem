<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Repositories\ProtocolRepository;
use acessoSystem\Http\Requests;
use acessoSystem\Http\Requests\ProtocolRequest;
use acessoSystem\Repositories\SponsorRepository;


class ProtocolsController extends Controller
{


    /**
     * @var ProtocolRepository
     */
    private $repository;
    /**
     * @var SponsorRepository
     */
    private $sponsorRepository;

    public function __construct(ProtocolRepository $repository,
                                SponsorRepository $sponsorRepository )

    {



        $this->repository = $repository;
        $this->sponsorRepository = $sponsorRepository;
    }


    public function index()
    {
        $protocols= $this->repository->paginate(5);
        $protocols->setPath('protocols');

          return view('admin.protocols.index',compact('protocols'));

    }

    public function create()
    {
        $sponsors =  $this->sponsorRepository->lists();


        return view('admin.protocols.create',compact('sponsors'));

    }

    public function store(ProtocolRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.protocols.index');
    }

    public function edit($id)
    {
        $protocol = $this->repository->find($id);
        $sponsors =  $this->sponsorRepository->lists();

        return view('admin.protocols.edit',compact('protocol','sponsors'));
    }

    public function update(ProtocolRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.protocols.index');
    }
}
