<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'address'=> 'required',
            'additionalInfo'=>'max:255',
            'phone'=> ['required','regex:/^(\(?([\d \-\)\–\+\/\(]+)\)?([ .\-–\/]?)([\d]+))$/'],
            'payment'=>'payment',
            'items'=>'empty|quantity'
        ];
    }
    public function messages()
    {
        return [
            'address.required'=>'You have to enter delivery addres!',
            'additionalInfo.max'=>'Info length must be less than 255!',
            'phone.required'=>'Phone number is required!',
            'phone.regex'=>'You have to enter phone number in valid format!',
            'payment'=>'Payment type that does not exist!',
            'items.empty'=>'empty array',
            'items.quantity'=>'quantity must be less then 5'
        ];
    }
}
