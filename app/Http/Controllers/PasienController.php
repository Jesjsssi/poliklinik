<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all(); // Mengambil semua data pasien
        return view('pasien.dashboard', compact('pasiens')); // Tampilkan halaman dashboard pasien
    }

    public function create()
    {
        // Tampilkan halaman form untuk menambahkan pasien baru
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        // Validasi data input kecuali no_rm karena akan dibuat otomatis
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens,no_ktp',
            'no_hp' => 'required|string|max:50',
        ]);

        // Ambil nomor rekam medis terakhir
        $lastPasien = Pasien::latest('no_rm')->first();

        // Tentukan nomor rekam medis baru
        if ($lastPasien) {
            // Ekstrak angka dari no_rm terakhir dan tambahkan 1
            $lastNumber = (int) str_replace('RM_', '', $lastPasien->no_rm);
            $newNoRm = 'RM_' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada data, mulai dari RM_001
            $newNoRm = 'RM_001';
        }

        // Tambahkan nomor rekam medis ke data yang divalidasi
        $validated['no_rm'] = $newNoRm;

        // Simpan data pasien
        Pasien::create($validated);

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan dengan nomor rekam medis: ' . $newNoRm);
    }


    public function edit($id)
    {
        // Ambil data pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);

        // Tampilkan halaman form edit pasien
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'id_poli' => 'required|integer',
        ]);

        // Ambil data pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);

        // Update data pasien
        $pasien->update($request->all());

        // Redirect ke halaman daftar pasien dengan pesan sukses
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil dihapus.');
    }

    public function showRegister()
    {
        return view('auth.daftar');
    }
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens,no_ktp',
            'no_hp' => 'required|string|max:50',
        ]);

        // Ambil nomor rekam medis terakhir
        $lastPasien = Pasien::latest('no_rm')->first();

        if ($lastPasien) {
            // Ambil angka terakhir dari no_rm dan tambahkan 1
            $lastNumber = (int) str_replace('RM_', '', $lastPasien->no_rm);
            $newNoRm = 'RM_' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada data pasien, mulai dari RM_001
            $newNoRm = 'RM_001';
        }

        // Tambahkan nomor rekam medis ke data pasien
        $validated['no_rm'] = $newNoRm;

        // Simpan data pasien
        $pasien = Pasien::create($validated);

        // Arahkan ke halaman konfirmasi dengan no_rm
        return view('auth.pasien', ['no_rm' => $newNoRm, 'pasien' => $pasien]);
    }


    public function loginPasien(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string', // Validasi nama
            'alamat' => 'required|string', // Validasi alamat
        ]);

        // Mencari pasien berdasarkan nama dan alamat
        $pasien = Pasien::where('nama', $request->nama)
            ->where('alamat', $request->alamat)
            ->first();

        if ($pasien) {
            // Simpan ID pasien ke session
            session(['pasien_id' => $pasien->id]);

            // Redirect ke dashboard pasien
            return redirect()->route('pasien.dashboard')->with('success', 'Login berhasil!');
        }

        // Jika pasien tidak ditemukan
        return back()->with('error', 'Nama atau alamat tidak cocok.');
    }

    public function showLoginForm()
    {
        return view('auth.pasien');
    }







}
