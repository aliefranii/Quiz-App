<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Rute untuk landing page
Route::get('/', function () {
    return view('landingpage');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'role:guru'])->get('teacher/dashboard', [DashboardController::class, 'teacherDashboard'])->name('pages.teacher');
Route::middleware(['auth', 'role:siswa'])->get('student/dashboard', [DashboardController::class, 'studentDashboard'])->name('pages.student');
