<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => strip_tags(trim((string) $this->input('subject', ''))),
            'message' => strip_tags(trim((string) $this->input('message', ''))),
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'subject.required' => 'Please enter a subject.',
            'message.required' => 'Please enter your message.',
        ];
    }
}
