<?php

use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\BackEnd\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index');
    });

    Route::prefix('users')->controller(UserController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/edit/{user}', 'edit');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
