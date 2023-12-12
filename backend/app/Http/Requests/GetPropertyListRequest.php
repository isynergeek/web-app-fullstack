<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetPropertyListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name',
            'bedrooms' => 'numeric|gt:0',
            'bathrooms' => 'numeric|gt:0',
            'storeys' => 'numeric|gt:0',
            'garages' => 'numeric|gt:0',
            'price_from' => 'numeric|gt:0',
            'price_to' => 'numeric|gt:0',
        ];
    }
}
