<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // Semua method butuh login kecuali yang public
        $this->middleware('auth')->except(['home', 'struktur', 'layanan', 'visi']);
    }

    /**
     * Halaman utama (root)
     */
    public function home()
    {   
        // Kalau belum login
        return view('home'); // tampilkan halaman home umum (tanpa login)
    }

    /**
     * Halaman tambahan (public)
     */
    public function struktur()
    {
        return view('struktur');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function visi()
    {
        return view('visi');
    }

    /**
     * Cek koneksi ke database
     */
    public function cekKoneksi()
    {
        return response()->json(['status' => 'OK', 'message' => 'Koneksi ke database berhasil']);
    }
}
