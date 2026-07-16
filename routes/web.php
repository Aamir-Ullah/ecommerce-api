<?php

use Illuminate\Support\Facades\Route;

// Main Route

Route::get('/', function () {
    return view('welcome');
});
