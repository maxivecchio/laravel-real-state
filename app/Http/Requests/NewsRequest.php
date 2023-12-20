<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required|string',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'display' => 'required|boolean',
            'image_path' => 'nullable|url',
        ];
    }
    
    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
            'subtitle.required' => 'The subtitle is required.',
            'body.required' => 'The body is required.',
            'author.required' => 'The author is required.',
            'category.required' => 'The category is required.',
            'display.required' => 'The display status is required.',
            'image_path.url' => 'The image path must be a valid URL.',
        ];
    }
}
