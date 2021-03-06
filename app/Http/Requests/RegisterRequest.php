<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'phone_number' =>  ['required','unique:users','numeric' ,'digits:11', 'regex:/^09|011[0-9]*$/'],
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
