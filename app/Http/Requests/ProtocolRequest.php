<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class ProtocolRequest extends Request
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

            'sponsor_id'=>'required',
            'name'=>'required',
            'description'=>'required',
            'progress'=>'required',
            'status'=>'required',
        ];
    }
}
