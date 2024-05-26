<?php

use App\Http\Controllers\BackEnd\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/home', [HomeController::class, 'index']);
