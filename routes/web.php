<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonateController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home1');

Route::get('/vision', [HomeController::class, 'index'])->name('vision');

Route::get('/donate', [DonateController::class, 'index'])->name('donate');

Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Login Route
Route::get('/login',[LoginController::class,'index'])->name('login');

// Register Route
