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
            'firstName'=>['required', 'regex:/^[A-Z][a-z]{2,15}$/'],
            'lastName' => ['required', 'regex:/^[A-Z][a-z]{2,15}$/'],
            'email' => 'required|email|unique:users',
            'password' => ['required', 
            'min:6', 
            'regex:/^[A-z\d]+$/'],
            'password_confirm' => 'same:password'
        ];
    }
    public function messages(){
        return [
            'email.required' => 'Email must not be empty',
            'email' => 'You must enter email in valid format!',
            'firstName.required'=>'First name must not be empty!',
            'firstName.regex'=>'First name must be in regular format!',
            'lastName.required'=>'Last name must not be empty!',
            'lastName.regex'=>'Last name must be in regular format!',
            'password.min'=>'Minimum password length is 6!',
            'password.regex'=>'Password must be in valid format!',
            
        ];
    }
}
