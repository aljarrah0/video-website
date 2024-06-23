<?php

use App\Http\Controllers\BackEnd\CategoryController;
use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\BackEnd\PageController;
use App\Http\Controllers\BackEnd\SkillController;
use App\Http\Controllers\BackEnd\TagController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'home')->name('home');
    });

    Route::resource('users', UserController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('skills', SkillController::class)->except(['show']);
    Route::resource('tags', TagController::class)->except(['show']);
    Route::resource('pages', PageController::class)->except(['show']);
    Route::resource('videos', VideoController::class)->except(['show']);
    Route::post('comments', [VideoController::class, 'commentStore'])->name('comment.store');
    Route::get('comments/{id}', [VideoController::class, 'commentDelete'])->name('comment.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
