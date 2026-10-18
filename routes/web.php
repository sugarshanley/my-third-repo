<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;

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

// Display the enrollment form
Route::get('/enrollment', [EnrollmentController::class, 'create'])
    ->name('enrollment.create');

// Process the submitted enrollment form
Route::post('/enrollment', [EnrollmentController::class, 'store'])
    ->name('enrollment.store');
