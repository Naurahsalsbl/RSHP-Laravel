<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdministrator
{
    public function handle(Request $request, Closure $next)
    {
        // Cek login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil role langsung dari tabel user
        $userRole = Auth::user()->idrole;

        // Kalau role = 1 (Administrator), izinkan lanjut
        if ($userRole == 1) {
            return $next($request);
        }

        // Kalau bukan admin, lempar balik ke login
         return abort(403, 'Anda tidak memiliki akses sebagai Administrator.');
    }
}
