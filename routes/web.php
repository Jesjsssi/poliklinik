<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\AuthenticateAndRedirect;
use App\Http\Controllers\PoliController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
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


// Authentication
Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/auth/error', function () {
    return view('auth.error');
})->name('auth.error');

Route::get('/403', function () {
    return view('auth.403');
})->name('auth.403');


// Dashboard 
Route::middleware([AuthenticateAndRedirect::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
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

Route::get('/dokter/periksa', [DokterController::class, 'periksaPasien'])
    ->middleware(CheckRole::class . ':dokter')
    ->name('dokter.periksa');



//Admin Dokter
Route::get('/admin/dokter', [AdminController::class, 'dokterIndex'])->name('admin.dokter.index');
Route::get('/admin/dokter/create', [AdminController::class, 'createDokter'])->name('admin.dokter.create');
Route::post('/admin/dokter', [AdminController::class, 'storeDokter'])->name('admin.dokter.store');
Route::get('/admin/dokter/{id}/edit', [AdminController::class, 'editDokter'])->name('admin.dokter.edit');
Route::post('/admin/dokter/{id}/update', [AdminController::class, 'updateDokter'])->name('admin.dokter.update');
Route::delete('/admin/dokter/{id}', [AdminController::class, 'deleteDokter'])->name('admin.dokter.destroy');

//Poli
Route::resource('polis', PoliController::class);