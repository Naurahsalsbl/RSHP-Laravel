<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardDokterController extends Controller
{
    public function index()
    {
        $dataPasien = Pasien::all();
        return view('Dokter.dashboard');
    }
}
