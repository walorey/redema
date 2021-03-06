<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'min:3|max:25|required',
            'lastname' => 'min:3|max:40|required',
            'email' => 'max:45|required|unique:users',
            'password' => 'min:8|max:16|required',
            'type' => 'required'
        ];
    }
}
