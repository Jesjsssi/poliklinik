<?php

namespace App\Http\Controllers;

use App\Models\DaftarPoli;
use App\Models\Pasien;
use App\Models\JadwalPeriksa;
use Illuminate\Http\Request;
use App\Models\Poli;


class DaftarPoliController extends Controller
{
    public function index()
    {
        // Ambil data daftar poli dengan relasi pasien, jadwal, dan poli
        $daftarPolis = DaftarPoli::with(['pasien', 'jadwal.dokter', 'poli'])->get();

        // Data tambahan untuk form pendaftaran
        $pasiens = Pasien::all();
        $jadwals = JadwalPeriksa::with('dokter')->get();
        $polis = Poli::all();

        return view('pasien.poli.index', compact('daftarPolis', 'pasiens', 'jadwals', 'polis'));
    }


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
        $request->validate([
            'id_pasien' => 'required|exists:pasiens,id',
            'id_jadwal' => 'required|exists:jadwal_periksas,id',
            'keluhan' => 'required|string|max:255',
        ]);

        // Cari Poli berdasarkan Jadwal
        $jadwal = JadwalPeriksa::with('dokter.poli')->find($request->id_jadwal);
        $idPoli = optional($jadwal->dokter->poli)->id;

        if (!$idPoli) {
            return back()->withErrors('Poli tidak ditemukan untuk dokter pada jadwal ini.');
        }

        // Hitung nomor antrian terakhir berdasarkan jadwal
        $lastAntrian = DaftarPoli::where('id_jadwal', $request->id_jadwal)->max('no_antrian');

        // Jika belum ada antrian, setel menjadi 1, jika sudah, tambahkan 1
        $newAntrian = $lastAntrian ? $lastAntrian + 1 : 1;

        // Simpan data
        DaftarPoli::create([
            'id_pasien' => $request->id_pasien,
            'id_jadwal' => $request->id_jadwal,
            'id_poli' => $idPoli,
            'keluhan' => $request->keluhan,
            'no_antrian' => $newAntrian,
        ]);

        return redirect()->route('pasien.poli.index')->with('success', 'Pendaftaran berhasil. Nomor antrian Anda: ' . $newAntrian);
    }

    public function show($id)
    {
        $daftarPoli = DaftarPoli::with('poli', 'jadwal.dokter')->findOrFail($id);
        return response()->json($daftarPoli);
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
