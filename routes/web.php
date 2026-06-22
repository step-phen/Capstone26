<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('dashboard');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

