<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*----------------------------------------NON AUTH--------------------------------------*/
Route::get('/', function () {
    return view('auth.login');
});

/*----------------------------------------AUTH ROUTE--------------------------------------*/
Route::middleware(['auth', 'verified'])->group(function() {
    /*----------------------------------------USER--------------------------------------*/
    Route::resource('user', UserController::class);
});
