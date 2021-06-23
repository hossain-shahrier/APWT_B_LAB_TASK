<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|min:3|max:30|',
            'email' => 'required|email|min:10|max:50',
            'password' => 'required|min:8|max:20|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8|max:20|',
            'city' => 'min:3|max:20|',
            'country' => 'min:3|max:20|',
            'company' => 'min:3|max:20|',
            'phone_number' => 'required|min:11|max:15|',
        ];
    }
    public function messages()
    {
        return [
            'password.min' => 'Password must be more than 8 letters.',
            'password.max' => 'Password must be less than 20 letters.',
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.max' => 'Email must be less than 50 letters.',
        ];
    }
}
