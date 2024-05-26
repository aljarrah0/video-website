<?php

use App\Http\Controllers\BackEnd\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index');
    });
});
