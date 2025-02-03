<?php

use App\Http\Controllers\Web\Brand\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function (){
    return Inertia::render('Home');
})->name('dashboard');

Route::group([
    'prefix' => 'brands',
    'as' => 'brands.'
], function (){
    Route::get('/', IndexController::class)->name('index');
});
