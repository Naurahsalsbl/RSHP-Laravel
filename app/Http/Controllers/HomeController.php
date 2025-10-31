<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
{
    if (auth()->check()) {
        switch (auth()->user()->idrole) {
            case 1: return redirect()->route('admin.dashboard');
            case 2: return redirect()->route('dokter.dashboard');
            case 3: return redirect()->route('perawat.dashboard');
            case 4: return redirect()->route('resepsionis.dashboard');
            case 5: return redirect()->route('pemilik.dashboard');
        }
    }

    // kalau belum login → ke login
    return redirect()->route('login');
}

}
