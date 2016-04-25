<?php

namespace acessoSystem\Http\Requests;

use acessoSystem\Http\Requests\Request;

class EntryUpdateRequest extends Request
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
            'user_handicapped'               => 'required',
            'user_quota'                     => 'required',
            'user_needs'                     => 'required',
        ];
    }
}
