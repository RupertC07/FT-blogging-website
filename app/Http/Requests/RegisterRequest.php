<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'date_of_birth' => 'required|date|before:today',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'The full name is required.',
            'fullname.string' => 'The full name must be a valid string.',
            'fullname.max' => 'The full name cannot exceed 255 characters.',
            'email.required' => 'The email address is required.',
            'email.email' => 'The email address must be a valid email.',
            'email.unique' => 'The email address is already taken.',
            'email.max' => 'The email address cannot exceed 255 characters.',
            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
            'date_of_birth.required' => 'The date of birth is required.',
            'date_of_birth.date' => 'The date of birth must be a valid date.',
            'date_of_birth.before' => 'The date of birth must be before today.',
        ];
    }
}
