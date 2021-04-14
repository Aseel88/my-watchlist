<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController1;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AddMovieController;

// Movies
Route::get('/', [MoviesController::class, 'index'])->name('index');
Route::get('movies/{id}', [MoviesController::class, 'show'])->name('movie');


Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('logout', LogoutController::class);

Route::get('/login', [LoginController1::class, 'index'])->name('login');
Route::post('/login', [LoginController1::class, 'store']);

Route::get('/signup', [RegistrationController::class, 'index'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'store']);

// List
Route::post('movies/{id}', AddMovieController::class)->middleware('auth');
Route::delete('movies/{id}', AddMovieController::class)->middleware('auth');
Route::get('your-list', ListController::class)->middleware('auth');
