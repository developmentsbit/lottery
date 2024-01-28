<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MemberRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'referral_no' => 'required',
            'mobile_no' => 'required|unique:members,mobile_no,'.$request->mobile_no,
            'password' => 'required',
            'confirm_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required',
            'nationality' => 'required',
        ];
    }

    /**
     *
     * We can send custom messages for validation error
     * give the rules message as like as you want
     */

     public function messages(){
        return [
            'referral_no.required' => __('frontend.referral_no_required'),
            'mobile_no.required' => __('frontend.mobile_no_required'),
            'mobile_no.unique' => __('frontend.mobile_no_unique'),
            'password.required' => __('frontend.password_required'),
            'confirm_password.required' => __('frontend.confirm_password_required'),
            'first_name.required' => __('frontend.first_name_required'),
            'last_name.required' => __('frontend.last_name_required'),
            'gender.required' => __('frontend.gender_required'),
            'city.required' => __('frontend.city_required'),
            'country.required' => __('frontend.country_required'),
            'email.required' => __('frontend.email_required'),
            'nationality.required' => __('frontend.nationality_required'),
        ];
     }
}
