<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalPeriksa;
use App\Models\Periksa;

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

    public function jadwalPeriksa()
    {
        $jadwalPeriksas = JadwalPeriksa::with('dokter')->get();
        return view('dokter.jadwal', compact('jadwalPeriksas'));
    }

    // Fungsi untuk menampilkan jadwal pemeriksaan
    public function periksaPasien()
    {
        // Mengambil data pemeriksaan dari tabel periksas beserta informasi dokter dan daftar poli
        $jadwalPeriksas = Periksa::with('daftarPoli.dokter')->get();

        // Mengirim data ke view
        return view('dokter.periksa', compact('jadwalPeriksas'));
    }
}
