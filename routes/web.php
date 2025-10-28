<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index'])->name('melk');
Route::post('/melk', [DataController::class, 'store'])->name('melk-store');
Route::get('/show', [DataController::class, 'show'])->name('melk.show');

/*************************************** AUTH ***************************************************/
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
