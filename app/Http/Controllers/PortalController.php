<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    /**
     * Display the student's grade report.
     *
     * @param string $studentId
     * @param string $semester
     * @return \Illuminate\View\View
     */
    public function viewGrades($studentId, $semester = '1st-Sem')
    {
        return view('portal.grades', [
            'studentId' => $studentId,
            'semester' => strtoupper($semester),
        ]);
    }
}