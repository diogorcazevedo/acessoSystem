<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use Illuminate\Support\Facades\Session;


class AuthService
{



    /**
     * @var EmailService
     */
    private $emailService;

    public function __construct(EmailService $emailService)
    {

        $this->emailService = $emailService;
    }



    public function passwordSend($data)
    {
            try {
                $info = [
                    'email' => $data['email'],
                    'name' =>$data['name'],
                    'password'=>$data['password']
                ];
                $this->emailService->sendCreatePassword($info);
                //Session::put('success', 'Contato enviado com sucesso!');

            } catch (\Exception $e) {
                throw $e;
            }



    }


}