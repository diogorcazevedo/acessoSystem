<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class BradescoRequest extends Request
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

            'project_id'            => 'required',
            'bank'                  => 'required|size:1',
            'valor'                 => 'required',
            'agencia'               => 'required|max:4|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'agenciaDv'             => 'required|max:1|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'carteira'              => 'required|size:1|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'conta'                 => 'required|max:7|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'contaDv'               => 'required|max:1|regex:/^[0-9\-!,\'\"\/@\.:\(\)]+$/',
            'descricaoDemonstrativo'=> 'required',
            'instrucoes'            => 'required',
        ];
    }
}
