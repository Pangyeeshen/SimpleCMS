<?php

namespace App\Http\Pages\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePagesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id" =>  "required|exists:pages,id",
            "name" => "required|max:255",
            "code" => "required|max:255",
            "sequence" => "integer"
        ];
    }
}
