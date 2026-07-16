<?php

use Illuminate\Support\Facades\Route;

// Main Routes

Route::get('/', function () {
    return view('welcome');
});
