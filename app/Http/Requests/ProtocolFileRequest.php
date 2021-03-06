<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class ProtocolFileRequest extends Request
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
            'image'=> 'mimes:jpeg,bmp,png,pdf,csv,xls,xlsx,doc,docx,jpg,zip,rar,sql,json,xml',
            'type'=>'required'
        ];
    }
}
