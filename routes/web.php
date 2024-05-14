<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrymeController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TryjournalController;

Route::get('/', [MainPageController::class, 'index'])->name('home1');

Route::get('/mainpage', [MainPageController::class, 'index'])->name('home2');

Route::get('/vision', [MainPageController::class, 'index'])->name('vision');

Route::get('/donate', [DonateController::class, 'index'])->name('donate');

Route::get('/about', [MainPageController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Login Route
Route::get('/login',[LoginController::class,'index'])->name('login');

// Register Route
Route::get('/register',[RegisterController::class,'index'])->name('register');

//Try Me page
Route::get('/tryme',[TrymeController::class,'index'])->name('trymenu');

//Try Me Journal Route
Route::get('/trymejournal',[TryjournalController::class, 'index'])->name('trymejournal');
Route::get('/trymejournal/{tryjournal}', [TryjournalController::class, 'show'])->name('trymejournal.show');
Route::get('/trymejournal/addjournal/create',[TryjournalController::class, 'addjournalpage'])->name('trymejournal.create');
Route::post('/trymejournal/addjournal/store',[TryjournalController::class, 'addjournal'])->name('trymejournal.store');
Route::get('/trymejournal/edit/{tryjournal}', [TryjournalController::class, 'editjournal'])->name('trymejournal.edit');
Route::put('/trymejournal/update/{tryjournal}', [TryjournalController::class, 'updatejournal'])->name('trymejournal.update');
Route::delete('/trymejournal/destroy/{tj}', [TryjournalController::class, 'destroy'])->name('trymejournal.destroy');

//Try Me Psikolog Route
Route::get('/trymepsikolog',[PsikologController::class, 'index'])->name('trymepsikolog');

//Try Me Forum Route
Route::get('/forum',[ForumController::class, 'index'])->name('forum');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
