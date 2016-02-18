<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use acessoSystem\Repositories\ContactRepository;
use Illuminate\Support\Facades\Mail;


class EmailService
{


    /**
     * @var ContactRepository
     */
    private $repository;


    public function __construct(ContactRepository $repository)
    {

        $this->repository = $repository;

    }

    public function sendEmailContact(array $data)
    {

        Mail::send('emails.contact',['data' => $data], function ($message) use ($data) {

            $message->from('contato@acessopublico.org.br', 'Acesso Público');

            $message->to($data['email'], $data['name'])->subject('Retorno de contato Acesso Público!');
        });

    }


    public function sendCreatePassword(array $data)
    {

        Mail::send('emails.create_password',['data' => $data], function ($message) use ($data) {

            $message->from('contato@acessopublico.org.br', 'Acesso Público');

            $message->to($data['email'], $data['name'])->subject('Senha cadastrada Acesso Público!');
        });

    }

}