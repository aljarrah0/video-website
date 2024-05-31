<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
        $commonRules = [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'meta_keywords' => ['required', 'string', 'min:3', 'max:255'],
            'meta_description' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'is_published' => ['required', 'integer', 'between:0,1'],
            'youtube' => ['required', 'url'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],

        ];

        if ($this->method() == 'POST') {
            $specialRules = [
                'image' => ['required', 'image'],
            ];
        } elseif ($this->method() == 'PUT') {
            $specialRules = [
                'image' => ['nullable', 'image'],
            ];
        }

        return $commonRules + $specialRules;
    }
}
