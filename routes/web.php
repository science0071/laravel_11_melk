<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index'])->name('melk');
Route::post('/', [DataController::class, 'store'])->name('melk-store');
Route::get('/show', [DataController::class, 'show'])->name('melk.show');

Route::get('autoSelec', [DataController::class, 'autoSelec'])->name('autoSelec');
Route::get('melk.search',[DataController::class,'search'])->name('melk.search');
Route::post('/toggle-select', [DataController::class, 'toggle'])->name('select.toggle');

Route::get('myfav', [DataController::class, 'myfav'])->name('myfav');
Route::post('remove', [DataController::class, 'remove'])->name('melk.remove');

/*************************************** AUTH ***************************************************/
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
