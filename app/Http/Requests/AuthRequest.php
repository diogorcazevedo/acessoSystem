<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class AuthRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'email'                        => 'required|email|max:255',
            'password'                     => 'required|min:6',
        ];
    }

    public function messages()
    {

        return   [
            //required


            'email.required' => 'O campo E-MAIL é obrigatório',
            'password.required' => 'O campo SENHA  é obrigatório',


            //max

            'email.max' => 'E-MAIL não deve ser maior que 255 DÍGITOS',
            'password.max' =>  ' SENHA deve ser maior que 6 DÍGITOS',


        ];
    }
}
