<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home1');

Route::get('/vision', [HomeController::class, 'index'])->name('vision');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/news', [HomeController::class, 'index'])->name('news');