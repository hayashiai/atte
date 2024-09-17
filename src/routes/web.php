<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClockController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [ClockController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances');
Route::post('/clock-in', [AttendanceController::class, 'clockIn'])->name('clock-in');
Route::post('/clock-out', [AttendanceController::class, 'clockOut'])->name('clock-out');
Route::post('/break-start', [AttendanceController::class, 'breakStart'])->name('break-start');
Route::post('/break-end', [AttendanceController::class, 'breakEnd'])->name('break-end');