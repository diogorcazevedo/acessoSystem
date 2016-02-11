<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Http\Requests;
use acessoSystem\Repositories\ProtocolRepository;



class LayoutController extends Controller
{


    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;

    public function __construct(ProtocolRepository $protocolRepository)
    {

        $this->protocolRepository = $protocolRepository;
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
        return view('layouts.client.index',compact('protocols','all'));
    }
}
