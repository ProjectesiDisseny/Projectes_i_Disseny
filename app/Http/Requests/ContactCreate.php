<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactCreate extends Request
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
            'name' => 'required|max:64',
            'email' => 'required|unique:contacts|max:125',
            'phone' => 'required|max:64',
            'content' => 'required|max:10000',
            'privacity' => 'required',
        ];
    }
}
