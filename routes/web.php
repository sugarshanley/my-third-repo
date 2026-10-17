<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enrollment', [EnrollmentController::class, 'showForm'])
    ->name('enrollment.form');

Route::post('/enrollment', [EnrollmentController::class, 'submitForm']);

Route::get('/login', function () {
    return view('login');
});
