<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname'   => 'required|min:5',
            'student_id' => ['required', 'regex:/^\d{4}-\d{5}$/'],
            'track'      => 'required|in:web,network',
            'email'      => 'required|email',
            'units'      => 'required|integer|between:3,21',
            'terms'      => 'accepted',
        ];
    }
}
