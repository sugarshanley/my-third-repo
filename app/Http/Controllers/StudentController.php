<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Exercise 1: Basic Route Parameter
    public function showProfile($id)
    {
        return view('student-profile', [
            'studentId' => $id
        ]);
    }

    // Exercise 2: Multiple Route Parameters
    public function showSubject($course, $subjectCode)
    {
        return view('subject-details', [
            'course' => strtoupper($course),
            'code' => strtoupper($subjectCode)
        ]);
    }

    // Exercise 3: Optional Route Parameter
    public function showGrades($term = 'Midterms')
    {
        return view('grades', [
            'term' => ucfirst($term)
        ]);
    }

    // Exercise 4: Route Constraint
    public function showDepartment($id)
    {
        return view('department', [
            'departmentId' => $id
        ]);
    }
}