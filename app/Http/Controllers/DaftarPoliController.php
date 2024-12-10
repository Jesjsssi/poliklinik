<?php

namespace App\Http\Controllers;

use App\Models\DaftarPoli;
use App\Models\Pasien;
use App\Models\JadwalPeriksa;
use Illuminate\Http\Request;

class DaftarPoliController extends Controller
{
    /**
     * Menampilkan daftar pasien yang terdaftar di poli
     */
    public function index()
    {
        // Ambil semua data pasien yang sudah terdaftar
        $daftarPolis = DaftarPoli::with('pasien', 'jadwal')->get(); // Ambil data poli dengan relasi pasien dan jadwal

        // Ambil data pasien dan jadwal untuk ditampilkan di form pendaftaran
        $pasiens = Pasien::all();
        $jadwals = JadwalPeriksa::all();

        return view('pasien.poli.index', compact('daftarPolis', 'pasiens', 'jadwals'));
    }

    /**
     * Menampilkan form untuk membuat daftar poli baru
     */
    public function create()
    {
        // Ambil data pasien dan jadwal untuk ditampilkan di form
        $pasiens = Pasien::all();  // Ambil semua data pasien
        $jadwals = JadwalPeriksa::all();  // Ambil semua data jadwal periksa

        // Kirimkan data pasien dan jadwal ke view
        return view('pasien.poli.create', compact('pasiens', 'jadwals'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id_pasien' => 'required|exists:pasiens,id',
            'id_jadwal' => 'required|exists:jadwal_periksas,id',
            'keluhan' => 'required|string',
            'no_antrian' => 'required|integer',
        ]);

        // Simpan data daftar poli
        DaftarPoli::create($validated);

        return redirect()->route('pasien.poli.index')->with('success', 'Pasien berhasil didaftarkan.');
    }

    /**
     * Menampilkan form untuk mengedit daftar poli
     */
    public function edit($id)
    {
        $daftarPoli = DaftarPoli::findOrFail($id);
        $pasien = Pasien::all();
        $jadwal = JadwalPeriksa::all();
        return view('pasien.poli.edit', compact('daftarPoli', 'pasien', 'jadwal'));
    }

    /**
     * Memperbarui data daftar poli
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pasien' => 'required|exists:pasiens,id',
            'id_jadwal' => 'required|exists:jadwal_periksas,id',
            'keluhan' => 'required',
            'no_antrian' => 'required|integer',
        ]);

        $daftarPoli = DaftarPoli::findOrFail($id);
        $daftarPoli->update($request->all());

        return redirect()->route('pasien.poli.index')->with('success', 'Daftar Poli berhasil diperbarui.');
    }

    /**
     * Menghapus data daftar poli
     */
    public function destroy($id)
    {
        $daftarPoli = DaftarPoli::findOrFail($id);
        $daftarPoli->delete();

        return redirect()->route('pasien.poli.index')->with('success', 'Daftar Poli berhasil dihapus.');
    }
}
