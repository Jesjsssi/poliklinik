<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pasien;
class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            return response()->view('auth.403', [], 403);
        }

        // Tambahkan logika untuk memeriksa apakah pengguna ada di tabel pasiens
        if ($role === 'pasien') {
            $pasien = Pasien::where('user_id', Auth::id())->first();
            if (!$pasien) {
                return response()->view('auth.403', [], 403);
            }
        }

        return $next($request);
    }
}
