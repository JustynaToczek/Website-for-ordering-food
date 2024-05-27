<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'address_id' => 'required|integer|exists:delivery_addresses,id',
            'date' => 'required|date|date_format:Y-m-d H:i:s',
            'total_price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }
}
