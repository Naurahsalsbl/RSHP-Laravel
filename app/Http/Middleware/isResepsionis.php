<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isResepsionis
{
    public function handle(Request $request, Closure $next)
    {
        // Kalau belum login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil idrole dari user yang login
        $userRole = Auth::user()->idrole;

        // Kalau role = 4 (Resepsionis)
        if ($userRole == 4) {
            return $next($request);
        }

        // Kalau bukan resepsionis
        return redirect()->route('login')->with('error', 'Akses ditolak. Anda bukan resepsionis.');
    }
}
