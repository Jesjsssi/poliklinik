<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Memeriksa apakah pengguna yang login adalah pasien
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('admin.dashboard'); // Tampilkan halaman dashboard pasien
        }

        // Jika bukan pasien, arahkan ke halaman yang sesuai atau login
        return redirect()->route('auth.login');
    }
}
