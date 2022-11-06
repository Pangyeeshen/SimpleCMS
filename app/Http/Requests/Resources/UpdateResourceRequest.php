<?php

namespace App\Http\Requests\Resources;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResourceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id" => "required|exists:resources,id",
            "name" => "required|max:255",
            "code" => "required|max:255",
            "sequence" => "integer",
            "page_id" => "required|exists:pages,id"
        ];
    }
}
