<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'index'])->name('melk');
Route::post('/melk', [DataController::class, 'store'])->name('melk-store');

Route::get('/show', [DataController::class, 'show'])->name('melk.show');
