<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class FreesRequest extends Request
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

            'user_id'               => 'required',
            'nome'                  => 'required|max:200|regex:/^[\pL\s\-]+$/u',
            'nis'                   => 'required|size:11',
            'datadenascimento'      => 'required|size:8|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'sexo'                  => 'required|max:1',
            'num_identid_rg'        => 'required|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'sg_em_identid_rg'      => 'required|max:20|regex:/^[\pL\s\-]+$/u',
            'dt_identid_rg'         => 'required|size:8|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'cpf'                   => 'required|size:11',
            'nomedamae'             => 'required|max:200|regex:/^[\pL\s\-]+$/u',


            ];
    }

}
