<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PortalController;

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Student Enrollment
|--------------------------------------------------------------------------
*/

Route::get('/enrollment', [EnrollmentController::class, 'create'])
    ->name('enrollment.create');

Route::post('/enrollment', [EnrollmentController::class, 'store'])
    ->name('enrollment.store');

/*
|--------------------------------------------------------------------------
| Activity 1: Route Parameters & Controllers
|--------------------------------------------------------------------------
*/

Route::get('/student/{id}', [StudentController::class, 'showProfile']);

Route::get('/course/{course}/subject/{subject}', [StudentController::class, 'showSubject']);

Route::get('/grades/{term?}', [StudentController::class, 'showGrades']);

Route::get('/department/{id}', [StudentController::class, 'showDepartment'])
    ->where('id', '[0-9]+');

/*
|--------------------------------------------------------------------------
| Activity 2: Middleware & Access Control
|--------------------------------------------------------------------------
*/

Route::get('/access-denied', function () {
    return view('access-denied');
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
})->middleware('is_admin');

/*
|--------------------------------------------------------------------------
| Activity 3: Grade Portal & Security Clearance
|--------------------------------------------------------------------------
*/

// Public route: Unauthorized page
Route::get('/unauthorized', function () {
    return view('unauthorized');
});

// Protected route: Student Grade Portal
Route::get('/portal/student/{studentId}/{semester?}', [
    PortalController::class,
    'viewGrades'
])->middleware('check_key');