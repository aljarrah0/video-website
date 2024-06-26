<?php

use App\Http\Controllers\BackEnd\CategoryController;
use App\Http\Controllers\BackEnd\HomeController as BackEndHomeController;
use App\Http\Controllers\BackEnd\PageController;
use App\Http\Controllers\BackEnd\SkillController;
use App\Http\Controllers\BackEnd\TagController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\VideoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('frontend.landing');

Route::prefix('admin')->as('admin.')->group(function () {
    Route::controller(BackEndHomeController::class)->group(function () {
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
    Route::put('comments/{id}', [VideoController::class, 'commentUpdate'])->name('comment.update');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category}', [HomeController::class, 'category'])->name('frontend.category');

Route::fallback(function () {
    return 'هذا الرابط غير موجود';
});
