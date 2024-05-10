<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\TrymeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PsikologController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home1');

Route::get('/vision', [HomeController::class, 'index'])->name('vision');

Route::get('/donate', [DonateController::class, 'index'])->name('donate');

Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Login Route
Route::get('/login',[LoginController::class,'index'])->name('login');

// Register Route

//Try Me page
Route::get('/tryme',[TrymeController::class,'index'])->name('trymenu');

//Try Me Journal Route
Route::get('/trymejournal',[JournalController::class, 'index'])->name('trymejournal');

//Try Me Psikolog Route
Route::get('/trymepsikolog',[PsikologController::class, 'index'])->name('trymepsikolog');
