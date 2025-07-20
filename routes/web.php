<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;

// Rute untuk landing page
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);


Route::group(['middleware' => ['auth', 'role:guru']], function () {
    Route::get('dashboard/teacher', [DashboardController::class, 'teacherDashboard'])->name('pages.teacher');
});

Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('dashboard/student', [DashboardController::class, 'studentDashboard'])->name('pages.student');
});

