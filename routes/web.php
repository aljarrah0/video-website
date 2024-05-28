<?php

use App\Http\Controllers\BackEnd\CategoryController;
use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\BackEnd\SkillController;
use App\Http\Controllers\BackEnd\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('skills', SkillController::class)->except(['show']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
