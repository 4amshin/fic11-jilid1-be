<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*----------------------------------------NON AUTH--------------------------------------*/
Route::get('/', function () {
    return view('auth.login');
});

/*----------------------------------------AUTH ROUTE--------------------------------------*/
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');

    /*----------------------------------------USER--------------------------------------*/
    Route::resource('user', UserController::class);
});
