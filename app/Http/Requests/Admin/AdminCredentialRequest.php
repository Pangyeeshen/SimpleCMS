<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class AdminCredentialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'email' => 'required|email|max:255',
            'password' =>  'required'
        ];
    }

    // public function response(array $errors)
    // {
    //     return new HttpResponseException(response()->BaseResponse('422','',$errors));
    // }
}
