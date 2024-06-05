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
Route::get('/trymejournal',[TryjournalController::class, 'index'])->name('trymejournal')->middleware('auth');
Route::get('/trymejournal/{tryjournal}', [TryjournalController::class, 'show'])->name('trymejournal.show')->middleware('auth');
Route::get('/trymejournal/addjournal/create',[TryjournalController::class, 'addjournalpage'])->name('trymejournal.create')->middleware('auth');
Route::post('/trymejournal/addjournal/store',[TryjournalController::class, 'addjournal'])->name('trymejournal.store')->middleware('auth');
Route::get('/trymejournal/edit/{tryjournal}', [TryjournalController::class, 'editjournal'])->name('trymejournal.edit')->middleware('auth');
Route::put('/trymejournal/update/{tryjournal}', [TryjournalController::class, 'updatejournal'])->name('trymejournal.update')->middleware('auth');
Route::delete('/trymejournal/destroy/{tj}', [TryjournalController::class, 'destroy'])->name('trymejournal.destroy')->middleware('auth');

//Try Me Psikolog Route
Route::get('/trymepsikolog',[PsikologController::class, 'index'])->name('trymepsikolog');

//Try Me Forum Route
Route::get('/forum',[ForumController::class, 'index'])->name('forum');
Route::get('/forum/{forum}', [ForumController::class, 'show'])->name('forum.show');
Route::get('/forum/addforum/create',[ForumController::class, 'addforumpage'])->name('forum.create');
Route::post('/forum/addforum/store',[ForumController::class, 'store'])->name('forum.store');
Route::get('/forum/edit/{forum}', [ForumController::class, 'editforum'])->name('forum.edit');
Route::put('/forum/update/{forum}', [ForumController::class, 'updateforum'])->name('forum.update');
Route::delete('/forum/destroy/{f}', [ForumController::class, 'destroy'])->name('forum.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
