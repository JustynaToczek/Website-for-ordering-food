<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
            'dish_name' => 'required|string|max:50',
            'restaurant_name' => 'required|string|max:50|exists:restaurants,name',
            'city_name' => 'required|string|max:50|exists:cities,name',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'picture_path' => 'required|string|max:100',
            'description' => 'required|string|max:255',
        ];
    }
}
