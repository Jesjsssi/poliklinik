<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            // Login berhasil, cek role pengguna
            $user = Auth::user();

            // Mengarahkan berdasarkan role
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard'); // Halaman dashboard admin
            } elseif ($user->role == 'dokter') {
                return redirect()->route('dokter.dashboard'); // Halaman dashboard dokter
            }

            // Jika role tidak dikenali, arahkan ke halaman umum atau lainnya
            return redirect()->route('home'); // Halaman umum, misalnya untuk pasien atau halaman lain
        }

        // Cek apakah email ada di database
        $user = User::where('email', $request->email)->first();
        if ($user) {
            // Email ada, berarti password salah
            return redirect()->route('auth.error')->with('error', 'Password salah. Silakan coba lagi.');
        } else {
            // Email tidak ditemukan
            return redirect()->route('auth.error')->with('error', 'Email tidak ditemukan. Silakan coba lagi.');
        }
    }

}
