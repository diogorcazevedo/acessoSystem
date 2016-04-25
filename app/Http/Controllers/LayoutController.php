<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Http\Requests;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Repositories\ProtocolRepository;



class LayoutController extends Controller
{


    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;
    /**
     * @var EntryRepository
     */
    private $entryRepository;

    public function __construct(ProtocolRepository $protocolRepository,EntryRepository $entryRepository)
    {

        $this->protocolRepository = $protocolRepository;
        $this->entryRepository = $entryRepository;
    }

    public function admin()
    {
        $protocols = $this->protocolRepository->all();
        return view('layouts.admin.index',compact('protocols'));
    }

    public function client()
    {
        $all = $this->protocolRepository->all();
        $protocols = $this->protocolRepository->findByField('status','1');
        $entries = $this->entryRepository->search();
        return view('layouts.client.index',compact('protocols','all','entries'));
    }
}
