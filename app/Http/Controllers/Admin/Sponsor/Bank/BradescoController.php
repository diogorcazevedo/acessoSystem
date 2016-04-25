<?php

namespace acessoSystem\Http\Controllers\Admin\Sponsor\Bank;

use acessoSystem\Entities\Banking;
use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Repositories\BankingRepository;
use acessoSystem\Repositories\ContactRepository;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Http\Requests\ContactRequest;
use acessoSystem\Http\Requests\BradescoRequest;


class BradescoController extends Controller
{


    /**
     * @var BankingRepository
     */
    private $repository;
    /**
     * @var Banking
     */
    private $banking;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    public function __construct(BankingRepository $repository,Banking $banking,ProjectRepository $projectRepository)

    {

        $this->repository = $repository;
        $this->banking = $banking;
        $this->projectRepository = $projectRepository;
    }


    public function index()
    {
        $bankings = $this->banking->where('bank',1)->paginate(10);

        return view('admin.banking.bradesco.index', compact('bankings'));

    }


    public function create($id)
    {
        return view('admin.banking.bradesco.create',compact('id'));
    }

    public function store(BradescoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.bradesco.index');
    }

    public function edit($id)
    {
        $banking = $this->repository->find($id);
        $projects =  $this->projectRepository->lists();

        return view('admin.banking.bradesco.edit',compact('projects','banking'));
    }

    public function update(BradescoRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.bradesco.index');
    }
    }
