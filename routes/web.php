<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\RasHewanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Admin\KodeTindakanTerapiController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Resepsionis\DashboardResepsionisController;
use App\Http\Controllers\Dokter\DashboardDokterController;
use App\Http\Controllers\Perawat\DashboardPerawatController;
use App\Http\Controllers\Pemilik\DashboardPemilikController;


Route::get('/cek-koneksi', [HomeController::class, 'cekKoneksi'])->name('cek-koneksi');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi');

Route::resource('jenis-hewan', JenisHewanController::class);
Route::resource('pemilik', PemilikController::class);
Route::resource('ras-hewan', RasHewanController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('kategori-klinis', KategoriKlinisController::class);
Route::resource('kode-tindakan-terapi', KodeTindakanTerapiController::class);
Route::resource('pet', PetController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);

Auth::routes();


// Route untuk masing-masing role
Route::middleware(['auth','isAdministrator'])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/jenis-hewan', [JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
    Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('admin.pemilik.index');

});

Route::middleware(['auth','isResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [DashboardResepsionisController::class, 'index'])->name('resepsionis.dashboard');

});

Route::middleware(['auth','isDokter'])->group(function () {
    Route::get('/dokter/dashboard', [DashboardDokterController::class, 'index'])->name('dokter.dashboard');
    
});

Route::middleware(['auth','isPerawat'])->group(function () {
    Route::get('/perawat/dashboard', [DashboardPerawatController::class, 'index'])->name('perawat.dashboard');
    
});

Route::middleware(['auth','isPemilik'])->group(function () {
    Route::get('/pemilik/dashboard', [DashboardPemilikController::class, 'index'])->name('pemilik.dashboard');
    
});