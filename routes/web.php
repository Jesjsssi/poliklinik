<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;



Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('admin/dashboard', function () {
    return view('admin.dashboard'); // Ganti dengan nama view dashboard admin Anda
})->middleware('auth')->name('admin.dashboard');

Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter.dashboard');
Route::get('/pasien/dashboard', [PasienController::class, 'index'])->name('pasien.dashboard');
