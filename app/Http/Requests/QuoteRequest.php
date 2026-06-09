<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => strip_tags(trim((string) $this->input('name', ''))),
            'email' => filter_var(trim((string) $this->input('email', '')), FILTER_SANITIZE_EMAIL),
            'service' => strip_tags(trim((string) $this->input('service', ''))),
            'message' => strip_tags(trim((string) $this->input('message', ''))),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'service' => [
                'required',
                'string',
                Rule::in([
                    'web-development',
                    'digital-marketing',
                    'seo',
                    'mobile-apps',
                    'ai-integration',
                    'data-analytics',
                    'other',
                ]),
            ],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'service.required' => 'Please select a service.',
            'service.in' => 'Please select a valid service.',
            'message.required' => 'Please enter your message.',
        ];
    }
}
