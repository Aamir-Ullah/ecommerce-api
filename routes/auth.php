<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\AuthController;

Route::prefix('v1/auth')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);

});
