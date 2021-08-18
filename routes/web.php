<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('form', [UserController::class, 'show'])->name('form');
Route::post('form', [UserController::class, 'store']);

