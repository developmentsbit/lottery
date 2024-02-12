<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CashInRequest extends FormRequest
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
            'member_id' => 'required',
            'transaction_type' => 'required',
            'amount' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'member_id.required' => 'Select Member',
            'transaction_type.required' => 'Select Transaction Type',
            'amount.required' => 'Please Give Amount',
        ];
    }
}
