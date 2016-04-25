<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class RescueRequest extends Request
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

            'cpf'     => 'required|max:14',
        ];
    }

    public function messages()
    {

        return   [
            //required


            'cpf.required' => 'O campo CPF é obrigatório',

            //max

            'cpf.max' => 'CPF não deve ser maior que 14 DÍGITOS',



        ];
    }
}
