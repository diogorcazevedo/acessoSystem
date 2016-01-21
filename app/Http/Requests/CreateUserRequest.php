<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'user.name'             =>'required|regex:/^[\pL\s\-]+$/u',
            'user.email'            =>'required|email|unique:users,email_address',
            'user.cpf'              =>'required|numeric|unique:users,email_address',
            'user.identity'         =>'required',
            'user.password'         =>'required|confirmed',
            'user.password'         =>'required',
            'birthdate'             =>'required',
            'phone'                 =>'required',
            'cel'                   =>'required',
            'gender'                =>'required',
            'maritalstatus'         =>'required',
            'mother'                =>'required',
            'father'                =>'required',
            'nationality'           =>'required',
            'naturality'            =>'required',
            'children'              =>'required',
            'zipcode'               =>'required',
            'address'               =>'required',
            'neighborhood'          =>'required',
            'complement'            =>'required',
            'city'                  =>'required',
            'state'                 =>'required',
        ];
    }
}
