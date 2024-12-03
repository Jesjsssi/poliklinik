<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Login berhasil, cek peran pengguna
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'dokter') {
                return redirect()->route('dokter.dashboard');
            } elseif ($user->role == 'pasien') {
                return redirect()->route('pasien.dashboard');
            }
        }

        // Login gagal, kembali ke halaman login dengan error
        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput();
    }

}
