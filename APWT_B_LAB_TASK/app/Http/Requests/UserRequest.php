<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:20|',
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
