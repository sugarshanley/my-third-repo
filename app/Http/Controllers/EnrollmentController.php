<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display the student enrollment form.
     */
    public function create(): View
    {
        return view('enrollment');
    }

    /**
     * Validate and process the enrollment form.
     */
    public function store(EnrollmentRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        return redirect()
            ->route('enrollment.create')
            ->with(
                'success',
                'Enrollment submitted successfully for Student ID: '
                . $validated['student_id']
            );
    }
}
