<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\RasHewanController;
use App\Http\Controllers\Admin\RolesUserController;
use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Dokter\DashboardDokterController;
use App\Http\Controllers\Admin\KodeTindakanTerapiController;
use App\Http\Controllers\Pemilik\DashboardPemilikController;
use App\Http\Controllers\Perawat\DashboardPerawatController;
use App\Http\Controllers\Resepsionis\DashboardResepsionisController;

// ----------------------------
// ROUTE UMUM (tanpa login)
// ----------------------------
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi');
Route::get('/cek-koneksi', [HomeController::class, 'cekKoneksi'])->name('cek-koneksi');

Auth::routes();

// ----------------------------
// ADMIN
// ----------------------------
Route::middleware('isAdministrator')->group(function () {
    Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/jenis-hewan', [JenisHewanController::class, 'index'])->name('jenis-hewan.index');
    Route::get('/jenis-hewan/create', [JenisHewanController::class, 'create'])->name('jenis-hewan.create');
    Route::post('/jenis-hewan/store', [JenisHewanController::class, 'store'])->name('jenis-hewan.store');
    Route::get('/jenis-hewan/edit', [JenisHewanController::class, 'edit'])->name('jenis-hewan.edit');
    Route::post('/jenis-hewan/destroy', [JenisHewanController::class, 'destroy'])->name('jenis-hewan.destroy');
    Route::get('/ras-hewan', [RasHewanController::class, 'index'])->name('ras-hewan.index');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('kategori-klinis.index');
    Route::get('/kode-tindakan-terapi', [KodeTindakanTerapiController::class, 'index'])->name('kode-tindakan-terapi.index');
    Route::get('/pet', [PetController::class, 'index'])->name('pet.index');
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
    });
});

// ----------------------------
// DOKTER
// ----------------------------
Route::middleware(['auth', 'isDokter'])->group(function () {
    Route::get('/dokter/dashboard', [DashboardDokterController::class, 'index'])->name('dokter.dashboard');
});

// ----------------------------
// PERAWAT
// ----------------------------
Route::middleware(['auth', 'isPerawat'])->group(function () {
    Route::get('/perawat/dashboard', [DashboardPerawatController::class, 'index'])->name('perawat.dashboard');
});

// ----------------------------
// RESEPSIONIS
// ----------------------------
Route::middleware(['auth', 'isResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');
});

// ----------------------------
// PEMILIK
// ----------------------------
Route::middleware(['auth', 'isPemilik'])->group(function () {
    Route::get('/pemilik/dashboard', [DashboardPemilikController::class, 'index'])->name('pemilik.dashboard');
});
