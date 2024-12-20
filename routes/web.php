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
use App\Http\Controllers\DaftarPoliController;




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




Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});


// Authentication
Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::get('register', [PasienController::class, 'showRegister'])->name('auth.daftar');

//pasien
Route::post('login/pasien', [PasienController::class, 'loginPasien']);
Route::get('login/pasien', [PasienController::class, 'showLoginForm'])->name('auth.pasien');

//dokter
Route::post('login/dokter', [DokterController::class, 'loginDokter']);
Route::get('login/dokter', [DokterController::class, 'showLoginForm'])->name('auth.dokter');

Route::post('register', [PasienController::class, 'register'])->name('auth.register');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/auth/error', function () { return view('auth.error'); })->name('auth.error');
Route::get('/403', function () {return view('auth.403'); })->name('auth.403');



Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/dokter/dashboard', [DokterController::class, 'index'])
    ->name('dokter.dashboard');

Route::get('/pasien/dashboard', [PasienController::class, 'index'])
    ->name('pasien.dashboard');



//Admin Dokter
Route::get('/admin/dokter', [AdminController::class, 'dokterIndex'])->name('admin.dokter.index');
Route::get('/admin/dokter/create', [AdminController::class, 'createDokter'])->name('admin.dokter.create');
Route::post('/admin/dokter', [AdminController::class, 'storeDokter'])->name('admin.dokter.store');
Route::get('/admin/dokter/{id}/edit', [AdminController::class, 'editDokter'])->name('admin.dokter.edit');
Route::post('/admin/dokter/{id}/update', [AdminController::class, 'updateDokter'])->name('admin.dokter.update');
Route::delete('/admin/dokter/{id}', [AdminController::class, 'deleteDokter'])->name('admin.dokter.destroy');

//Admin Pasien
Route::get('/admin/pasien', [AdminController::class, 'pasienIndex'])->name('admin.pasien.index');
Route::get('/admin/pasien/create', [AdminController::class, 'createPasien'])->name('admin.pasien.create');
Route::post('/admin/pasien', [AdminController::class, 'storePasien'])->name('admin.pasien.store');
Route::get('/admin/pasien/{id}/edit', [AdminController::class, 'editPasien'])->name('admin.pasien.edit');
Route::post('/admin/pasien/{id}/update', [AdminController::class, 'updatePasien'])->name('admin.pasien.update');
Route::delete('/admin/pasien/{id}', [AdminController::class, 'deletePasien'])->name('admin.pasien.destroy');

//Admin Poli
Route::get('/admin/poli', [PoliController::class, 'index'])->name('admin.poli.index');
Route::get('/admin/poli/create', [PoliController::class, 'create'])->name('admin.poli.create');
Route::post('/admin/poli', [PoliController::class, 'store'])->name('admin.poli.store');
Route::get('/admin/poli/{id}/edit', [PoliController::class, 'edit'])->name('admin.poli.edit');
Route::post('/admin/poli/{id}/update', [PoliController::class, 'update'])->name('admin.poli.update');
Route::delete('/admin/poli/{id}', [PoliController::class, 'destroy'])->name('admin.poli.destroy');

//Admin Obat
Route::get('/admin/obat', [AdminController::class, 'obatIndex'])->name('admin.obat.index');
Route::get('/admin/obat/create', [AdminController::class, 'createObat'])->name('admin.obat.create');
Route::post('/admin/obat', [AdminController::class, 'storeObat'])->name('admin.obat.store');
Route::get('/admin/obat/{id}/edit', [AdminController::class, 'editObat'])->name('admin.obat.edit');
Route::post('/admin/obat/{id}/update', [AdminController::class, 'updateObat'])->name('admin.obat.update');
Route::delete('/admin/obat/{id}', [AdminController::class, 'deleteObat'])->name('admin.obat.destroy');

//Dokter Jadwal
Route::get('/dokter/jadwal', [DokterController::class, 'jadwalIndex'])->name('dokter.jadwal.index');
Route::get('/dokter/jadwal/create', [DokterController::class, 'createJadwal'])->name('dokter.jadwal.create');
Route::post('/dokter/jadwal', [DokterController::class, 'storeJadwal'])->name('dokter.jadwal.store');
Route::get('/dokter/jadwal/{id}/edit', [DokterController::class, 'editJadwal'])->name('dokter.jadwal.edit');
Route::post('/dokter/jadwal/{id}/update', [DokterController::class, 'updateJadwal'])->name('dokter.jadwal.update');
Route::delete('/dokter/jadwal/{id}', [DokterController::class, 'deleteJadwal'])->name('dokter.jadwal.destroy');
Route::patch('/dokter/jadwal/{id}/status', [DokterController::class, 'updateStatus'])->name('dokter.jadwal.update-status');


//Dokter Periksa
Route::get('/dokter/periksa', [DokterController::class, 'periksaIndex'])->name('dokter.periksa.index');
Route::get('/dokter/periksa/create', [DokterController::class, 'createPeriksa'])->name('dokter.periksa.create');
Route::post('/dokter/periksa', [DokterController::class, 'storePeriksa'])->name('dokter.periksa.store');
Route::get('/dokter/periksa/{id}/edit', [DokterController::class, 'editPeriksa'])->name('dokter.periksa.edit');
Route::post('/dokter/periksa/{id}/update', [DokterController::class, 'updatePeriksa'])->name('dokter.periksa.update');
Route::delete('/dokter/periksa/{id}', [DokterController::class, 'deletePeriksa'])->name('dokter.periksa.destroy');

//Dokter Profil
Route::get('/dokter/profil', [DokterController::class, 'dokterProfil'])->name('dokter.profil.index');
Route::post('/dokter/profil', [DokterController::class, 'storeDokter'])->name('dokter.profil.store');
Route::get('/dokter/profil/{id}/edit', [DokterController::class, 'editDokter'])->name('dokter.profil.edit');
Route::post('/dokter/profil/{id}/update', [DokterController::class, 'updateDokter'])->name('dokter.profil.update');

//Pasien Poli
Route::get('/pasien/poli', [DaftarPoliController::class, 'index'])->name('pasien.poli.index');
Route::get('/pasien/poli/create', [DaftarPoliController::class, 'create'])->name('pasien.poli.create');
Route::post('/pasien/poli', [DaftarPoliController::class, 'store'])->name('pasien.poli.store');
Route::get('/pasien/poli/{id}/edit', [DaftarPoliController::class, 'edit'])->name('pasien.poli.edit');
Route::post('/pasien/poli/{id}/update', [DaftarPoliController::class, 'update'])->name('pasien.poli.update');
Route::delete('/pasien/poli/{id}', [DaftarPoliController::class, 'destroy'])->name('pasien.poli.destroy');
Route::get('pasien/poli/{id}', [DaftarPoliController::class, 'show'])->name('pasien.poli.show');

