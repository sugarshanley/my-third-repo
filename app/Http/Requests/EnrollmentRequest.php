<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'fullname' => trim(
                $this->input('first_name', '') . ' ' .
                $this->input('last_name', '')
            ),
        ]);
    }

    public function rules(): array
    {
        return [
            'fullname' => ['required', 'min:5'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'student_id' => ['required', 'regex:/^\d{4}-\d{5}$/'],
            'track' => ['required', 'in:web,network'],
            'email' => ['required', 'email'],
            'units' => ['required', 'integer', 'between:3,21'],
            'terms' => ['accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required' => 'Please enter your first and last name.',
            'fullname.min' => 'Your full name must contain at least 5 characters.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'student_id.regex' => 'Student ID must follow the format YYYY-XXXXX.',
            'track.in' => 'Please select Web Development or Network Administration.',
            'units.between' => 'Units must be between 3 and 21.',
            'terms.accepted' => 'You must agree to the enrollment terms and conditions.',
        ];
    }
}
