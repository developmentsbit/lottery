<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMethod extends FormRequest
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
            'method_name' => 'required',
            'number' => 'required',
            'vat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'method_name.required' => __('payment_method.method_name_required'),
            'number.required' => __('payment_method.number_required'),
            'vat.required' => 'Please Give Withdraw Vat Amount',
        ];
    }
}
