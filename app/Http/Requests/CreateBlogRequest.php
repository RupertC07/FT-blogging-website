<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
    public function authorize()
    {
        
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required.',
            'description.required' => 'The description is required.',
            'content.required' => 'The content is required.',
        ];
    }
}
