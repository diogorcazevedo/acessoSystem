<?php

namespace acessoSystem\Http\Controllers\Client\Bank;

use acessoSystem\Entities\BradescoBankings;
use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\BankingRepository;
use acessoSystem\Repositories\BradescoBankingsRepository;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Services\BradescoService;
use Barryvdh\DomPDF\PDF;


class ClientBradescoController extends Controller
{





    /**
     * @var EntryRepository
     */
    private $entryRepository;
    /**
     * @var BankingRepository
     */
    private $bankingRepository;
    /**
     * @var BradescoBankingsRepository
     */
    private $repository;
    /**
     * @var BradescoBankings
     */
    private $bradescoBankings;
    /**
     * @var BradescoService
     */
    private $bradescoService;
    /**
     * @var PDF
     */
    private $PDF;

    public function __construct(EntryRepository $entryRepository,
                                BankingRepository $bankingRepository,
                                BradescoBankingsRepository $repository,
                                BradescoBankings $bradescoBankings,
                                BradescoService $bradescoService,PDF $PDF)

    {

        $this->entryRepository = $entryRepository;
        $this->bankingRepository = $bankingRepository;
        $this->repository = $repository;
        $this->bradescoBankings = $bradescoBankings;
        $this->bradescoService = $bradescoService;
        $this->PDF = $PDF;
    }


    public function toview($id)
    {

        $boleto = $this->bradescoService->makeBank($id);

        return view('clients.bank.bank_output',compact('boleto'));

    }

    public function toprint($id)
    {

        $boleto = $this->bradescoService->makeBank($id);

        return view('clients.bank.bank_print',compact('boleto'));

    }
}
