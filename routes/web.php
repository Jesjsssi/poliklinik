<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Middleware\CheckRole;



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

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
        ->middleware(CheckRole::class . ':admin')
        ->name('admin.dashboard');

    Route::get('/dokter/dashboard', [DokterController::class, 'index'])
        ->middleware(CheckRole::class . ':dokter')
        ->name('dokter.dashboard');

    Route::get('/pasien/dashboard', [PasienController::class, 'index'])
        ->middleware(CheckRole::class . ':pasien')
        ->name('pasien.dashboard');
});

//Dokter
Route::get('/dokter/jadwal', [DokterController::class, 'jadwalPeriksa'])
    ->middleware(CheckRole::class . ':dokter')
    ->name('dokter.jadwal');


