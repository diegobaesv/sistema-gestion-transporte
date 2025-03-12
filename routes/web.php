<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'show'])->name('login');
