<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClassNameController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('main', function () {
    return view('layouts.main');
});

// Auth Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
 Route::get('register', [AuthController::class, 'register'])->middleware(['auth','role:admin']);
Route::post('register', [AuthController::class, 'store_register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [AuthController::class, 'dashboard']);

// Protected Resources

Route::resource('students', StudentController::class)->middleware(['auth','role:student']);
Route::resource('subjects', SubjectController::class)->middleware(['auth','role:staff|admin']);
Route::resource('staffs', StaffController::class)->middleware('auth');
Route::resource('classes', ClassNameController::class)->middleware('auth');
