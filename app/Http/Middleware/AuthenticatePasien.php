<?php
// app/Http/Middleware/AuthenticatePasien.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticatePasien
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('pasien')->check()) {
            return $next($request);
        }

        return redirect()->route('auth.pasien')->with('error', 'Anda harus login terlebih dahulu.');
    }
}
