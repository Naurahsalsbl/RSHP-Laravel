<?php

namespace App\Http\Controllers\Pemilik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPemilikController extends Controller
{
    public function index()
    {
        return view('pemilik.dashboard');
    }
}
