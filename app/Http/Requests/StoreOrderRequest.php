<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'transaction_time' => 'required|date',
            'total_price'      => 'required|integer|min:0',
            'total_item'       => 'required|integer|min:1',
            'kasir_id'         => 'required|exists:users,id', // Validasi kasir_id harus ada di tabel users
            'payment_method'   => 'required|in:cash,qris',
        ];
    }
}
