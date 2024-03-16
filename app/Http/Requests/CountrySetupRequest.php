<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountrySetupRequest extends FormRequest
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
            'name' => 'required',
            'dollar_rate' => 'required',
            'currency_name' => 'required',
        ];
    }

    public function messages()
    {
        return
        [
            'name.required' => 'Please Give Name',
            'dollar_rate.required' => 'Please Give Dollar Rate',
            'currency_name.required' => 'Please Give Currency Name',
        ];
    }
}
