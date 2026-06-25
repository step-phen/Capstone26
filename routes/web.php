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

// learners routes
Route::get('/learners', [LearnersController::class, 'learners'])
    ->name('teacher.learners');
Route::post('/learners', [LearnersController::class, 'store'])
    ->name('learners.store');
Route::get('/learners/{id}', [LearnersController::class, 'show'])
    ->name('learners.show');
Route::get('/learners/{id}/progress', [LearnersController::class, 'progress'])
    ->name('learners.progress');

// module
Route::get('/module', [ModuleController::class, 'module'])
    ->name('teacher.module');

// developmental checklist
Route::get('/developmental-checklist', [DclController::class, 'showDevelopmentalChecklist'])
    ->name('teacher.developmentalchecklist');

// report
Route::get('/report', [ReportController::class, 'showReport'])
    ->name('teacher.report');

