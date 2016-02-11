<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class DeliverableRequest extends Request
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
            'protocol_id'=>'required',
            'name'=>'required',
            'image'=>'image',
            'publishable'=>'required'
        ];
    }
}
