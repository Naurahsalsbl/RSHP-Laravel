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

        // Ambil relasi role user dari model User
        $user = Auth::user();
        $roleUser = $user->roleUser()->first();

        // Jika user punya role dan idrole = 1 (Administrator)
        if ($roleUser && $roleUser->idrole == 1) {
            return $next($request);
        }

        // Kalau bukan admin, tampilkan pesan akses ditolak
        return abort(403, 'Anda tidak memiliki akses sebagai Administrator.');
    }
}
