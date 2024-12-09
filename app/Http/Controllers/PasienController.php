<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function index()
    {
        // Memeriksa apakah pengguna yang login adalah pasien
        if (Auth::check() && Auth::user()->role == 'pasien') {
            return view('pasien.dashboard'); // Tampilkan halaman dashboard pasien
        }

        // Jika bukan pasien, arahkan ke halaman yang sesuai atau login
        // return redirect()->route('auth.login');
        $pasiens = Pasien::all();
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        // Tampilkan halaman form untuk menambahkan pasien baru
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens,no_ktp',
            'no_hp' => 'required|string|max:50',
            'no_rm' => 'required|string|max:25|unique:pasiens,no_rm',
        ]);

        // Simpan data pasien
        Pasien::create($validated);

        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);

        // Tampilkan halaman form edit pasien
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens,no_ktp,' . $id,
            'no_hp' => 'required|string|max:50',
            'no_rm' => 'required|string|max:25|unique:pasiens,no_rm,' . $id,
        ]);

        // Update data pasien
        $pasien = Pasien::findOrFail($id);
        $pasien->update($validated);

        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil dihapus.');
    }

    
}
