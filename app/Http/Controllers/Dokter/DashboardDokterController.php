<?php

namespace App\Http\Controllers\Dokter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardDokterController extends Controller
{
    public function index()
    {
        return view('Dokter.dashboard');
    }
}
