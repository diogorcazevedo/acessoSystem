<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class ContactRequest extends Request
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
            'name'                    =>'required|regex:/^[\pL\s\-]+$/u',
            'email'                   =>'required|email',
            'cel'                     =>'required',
            'description'             =>'required',
            'about'                   =>'required',
            'protocol'                =>'required',
            'image'                   => 'mimes:jpeg,bmp,png,pdf,csv,xls,xlsx,doc,docx,jpg,zip,rar,sql,json,xml',
        ];
    }
}
