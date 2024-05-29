<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'description' => ['required', 'string', 'min:10', 'max:255'],
            'meta_keywords' => ['nullable', 'string', 'min:3', 'max:255'],
            'meta_description' => ['nullable', 'string', 'min:3', 'max:255'],

        ];

        if ($this->method() == 'POST') {
            $specialRules = [
            ];
        } elseif ($this->method() == 'PUT') {
            $specialRules = [
            ];
        }

        return $commonRules + $specialRules;
    }
}
