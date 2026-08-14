<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // welcome.blade.php
    // hello.blade.php
    return view('hello');
});
