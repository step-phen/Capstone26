<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LearnersController;
use App\Http\Controllers\ModuleController;



Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');


// Teacher Routes
Route::get('/dashboard', [UsersController::class, 'showDashboard'])
    ->name('teacher.dashboard');

Route::get('/learners', [LearnersController::class, 'learners'])
    ->name('teacher.learners');

Route::get('/module', [ModuleController::class, 'module'])
    ->name('teacher.module');



