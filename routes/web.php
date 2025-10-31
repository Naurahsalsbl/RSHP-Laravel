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
use App\Http\Controllers\ResepsionisController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cek-koneksi', [HomeController::class, 'cekKoneksi'])->name('cek-koneksi');

Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi');
Route::get('/login', [HomeController::class, 'login'])->name('login');

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reset-password', function () {
    $user = User::find(6); // ganti 6 sesuai ID user-mu

    if ($user) {
        $user->password = Hash::make('123456'); // password baru
        $user->save();
        return "Password user ID 6 berhasil di-reset menjadi '123456'";
    } else {
        return "User dengan ID 6 tidak ditemukan";
    }
});


// Route untuk masing-masing role
Route::middleware(['isAdministrator'])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/jenis-hewan', [App\Http\Controllers\JenisHewanController::class, 'index'])->name('admin.jenis-hewan.index');
    Route::get('/admin/pemilik', [App\Http\Controllers\PemilikController::class, 'index'])->name('admin.pemilik.index');

});

Route::middleware(['auth', 'isResepsionis'])->group(function () {
    Route::get('/resepsionis/dashboard', [ResepsionisController::class, 'index'])->name('resepsionis.dashboard');
});