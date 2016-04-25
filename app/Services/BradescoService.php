<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use acessoSystem\Entities\BradescoBankings;
use acessoSystem\Repositories\ContactRepository;
use acessoSystem\Repositories\EntryRepository;
use DateTime;
use OpenBoleto\Agente;
use OpenBoleto\Banco\Bradesco;


class BradescoService
{

    /**
     * @var EntryRepository
     */
    private $entryRepository;

    public function __construct(EntryRepository $entryRepository)
    {

        $this->entryRepository = $entryRepository;
    }
    public function makeBank($id)
    {

            try {

                $entry = $this->entryRepository->find($id);
                $boleto = new BradescoBankings();
                $boleto->user_id = $entry->user->id;
                $boleto->entry_id = $id;
                $boleto->banking_id = $entry->project->banking->id;
                $boleto->dataVencimento = date("Y-m-d");
                $boleto->sacado = $entry->user->cpf;
                $boleto->sequencial = $entry->user->id;
                $boleto->save();


                $sacado = new Agente($entry->user->name,  $entry->user->cpf,
                                     $entry->user->client->address.' '.$entry->user->client->complement .' - '.$entry->user->client->neighborhood,
                                     $entry->user->client->zipcode,
                                     $entry->user->client->city,
                                     $entry->user->client->state);


                $cedente = new Agente('Instituto de Seleção', '02.123.123/0001-11', 'Avenida Nossa Senhora da Penha 280 sala 205', '29055-340', 'Vitória', 'ES');

                $boleto = new Bradesco(array(
                    // Parâmetros obrigatórios
                    'dataVencimento' => new DateTime(date("Y-m-d", strtotime("+2 days"))),
                    'valor' => $entry->project->banking->valor,
                    'sequencial' => $entry->user->id, // Até 11 dígitos
                    'sacado' => $sacado,
                    'cedente' => $cedente,
                    'agencia' => $entry->project->banking->agencia, // Até 4 dígitos
                    'carteira' => $entry->project->banking->carteira, // 3, 6 ou 9
                    'conta' => $entry->project->banking->conta, // Até 7 dígitos

                    // Parâmetros recomendáveis
                    //'logoPath' => 'http://empresa.com.br/logo.jpg', // Logo da sua empresa
                    'contaDv' => $entry->project->banking->contaDv,
                    'agenciaDv' => $entry->project->banking->agenciaDv,
                    'descricaoDemonstrativo' => array( // Até 5
                        $entry->project->banking->descricaoDemonstrativo
                    ),
                    'instrucoes' => array( // Até 8
                        $entry->project->banking->instrucoes
                    ),
                ));
                return $boleto;
            } catch (\Exception $e) {
                throw $e;
            }

    }


    public function secondBank($id)
    {




    }

}