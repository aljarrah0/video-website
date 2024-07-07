<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'phone' => ['required', 'regex:/^(010|011|012|015)[0-9]{8}$/'],

        ];
        if ($this->method() == 'POST') {
            $specialRules = [
                'email' => ['required', 'string', 'email', 'min:3', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'max:255'],
            ];
        } elseif ($this->method() == 'PUT') {
            $specialRules = [
                'email' => ['required', 'string', 'email', 'min:3', 'max:255', 'unique:users,email,'.$this->user->id],
                'password' => ['nullable', 'string', 'min:8', 'max:255'],
            ];
        }

        return $commonRules + $specialRules;
    }
}
