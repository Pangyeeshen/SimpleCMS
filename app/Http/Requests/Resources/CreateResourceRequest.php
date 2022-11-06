<?php

namespace App\Http\Requests\Resources;

use Illuminate\Foundation\Http\FormRequest;

class CreateResourceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|max:255",
            "code" => "required|max:255",
            "sequence" => "integer",
            "pageId" => "required|exists:pages,id"
        ];
    }
}
