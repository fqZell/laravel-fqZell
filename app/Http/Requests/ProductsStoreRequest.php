<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsStoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:80',
            'content' => 'required|min:5',
            'photo' => 'nullable|mimes:jpg,jpeg,png'
        ];
    }
}
