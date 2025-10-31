<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardResepsionisController extends Controller
{
    public function index()
    {
        return view('resepsionis.dashboard');
    }
}
