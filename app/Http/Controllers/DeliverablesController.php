<?php

namespace acessoSystem\Http\Controllers;



use acessoSystem\Http\Requests;
use acessoSystem\Http\Requests\DeliverableRequest;
use acessoSystem\Repositories\DeliverableRepository;
use acessoSystem\Repositories\ProtocolRepository;


class DeliverablesController extends Controller
{



    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;
    /**
     * @var DeliverableRepository
     */
    private $repository;

    public function __construct(DeliverableRepository $repository, ProtocolRepository $protocolRepository)

    {



        $this->protocolRepository = $protocolRepository;
        $this->repository = $repository;
    }


    public function index()
    {
        $deliverables= $this->repository->paginate(5);
        $deliverables->setPath('deliverables');

          return view('admin.deliverables.index',compact('deliverables'));

    }

    public function create()
    {
        $protocols =  $this->protocolRepository->lists();


        return view('admin.deliverables.create',compact('protocols'));

    }

    public function store(DeliverableRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.deliverables.index');
    }

    public function edit($id)
    {
        $deliverable = $this->repository->find($id);
        $protocols =  $this->protocolRepository->lists();

        return view('admin.deliverables.edit',compact('deliverable','protocols'));
    }

    public function update(DeliverableRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.deliverables.index');
    }
}
