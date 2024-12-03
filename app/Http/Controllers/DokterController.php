<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index()
    {
        // Memeriksa apakah pengguna yang login adalah dokter
        if (Auth::check() && Auth::user()->role == 'dokter') {
            return view('dokter.dashboard'); // Tampilkan halaman dashboard dokter
        }

        // Jika bukan dokter, arahkan ke halaman yang sesuai atau login
        return redirect()->route('auth.login');
    }
}
