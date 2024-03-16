<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentAccountsRequest extends FormRequest
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
            'country_id' => 'required',
            'agent_id' => 'required',
            'number' => 'required',
            'account_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'country_id.required' => 'Select Country',
            'agent_id.required' => 'Select Agent',
            'number.required' => 'Please Give Number',
            'account_name.required' => 'Please Give Account Name',
        ];
    }
}
