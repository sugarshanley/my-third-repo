<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;

class EnrollmentController extends Controller
{
    public function showForm()
    {
        return view('enrollment');
    }

    public function submitForm(EnrollmentRequest $request)
    {
        $validated = $request->validated();

        return redirect()
            ->route('enrollment.form')
            ->with(
                'success',
                'Application submitted successfully for Student ID '
                . $validated['student_id'] . '!'
            );
    }
}
