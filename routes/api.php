<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;

/*Route::name('api.')->group(function () {
    //authenticated requests
    Route::middleware('auth:sanctum')->group(function (){
        Route::get('auth/logout', LogoutController::class)->name('logout');
    });

    //guest requests
    Route::middleware('guest')->group(function () {
            Route::post('auth/register', RegistrationController::class)->name('register');
            Route::post('auth/login', LoginController::class)->name('login');
    });

});*/
