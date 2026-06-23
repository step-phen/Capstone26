<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LearnersController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DclController;
use App\Http\Controllers\ReportController;






Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// Teacher Routes
Route::get('/dashboard', [UsersController::class, 'showDashboard'])
    ->name('teacher.dashboard');

Route::get('/learners', [LearnersController::class, 'learners'])
    ->name('teacher.learners');

Route::get('/module', [ModuleController::class, 'module'])
    ->name('teacher.module');

Route::get('/developmental-checklist', [DclController::class, 'showDevelopmentalChecklist'])
    ->name('teacher.developmentalchecklist');

Route::get('/report', [ReportController::class, 'showReport'])
    ->name('teacher.report');

