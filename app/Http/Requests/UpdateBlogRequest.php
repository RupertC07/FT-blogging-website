<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    public function authorize()
    {
        // Allow all users to update the blog (or add authorization logic if needed)
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'title.string' => 'The title must be a valid string.',
            'description.string' => 'The description must be a valid string.',
            'content.string' => 'The content must be a valid string.',
        ];
    }
}
