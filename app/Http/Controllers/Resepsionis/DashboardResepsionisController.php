<?php

namespace App\Http\Controllers\Resepsionis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardResepsionisController extends Controller
{
    public function index()
    {
        return view('resepsionis.dashboard');
    }
}
