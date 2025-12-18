<?php

use App\Http\Controllers\auth\ForgotController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client/home');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.submit');
    Route::get('forgot', [ForgotController::class, 'index'])->name('forgot');
    Route::post('forgot', [ForgotController::class, 'forgot'])->name('forgot.submit');
});
