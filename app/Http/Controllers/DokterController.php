<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalPeriksa;
use App\Models\Dokter;
use App\Models\Periksa;
use App\Models\DaftarPoli;

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

    // Menampilkan jadwal periksa
    public function jadwalIndex()
    {
        $jadwalPeriksas = JadwalPeriksa::all(); // Mengambil semua data jadwal
        return view('dokter.jadwal.index', compact('jadwalPeriksas'));
    }

    public function createJadwal()
    {
        $dokters = Dokter::all();
        return view('dokter.jadwal.create', compact('dokters'));
    }

    public function storeJadwal(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        JadwalPeriksa::create($request->all());

        return redirect()->route('dokter.jadwal.index')->with('success', 'Jadwal Dokter berhasil ditambahkan.');
    }

    public function editJadwal($id)
    {
        $jadwalPeriksa = JadwalPeriksa::findOrFail($id); // Mengambil data berdasarkan ID
        $dokters = Dokter::all(); // Mengambil data dokter
        return view('dokter.jadwal.edit', compact('jadwalPeriksa', 'dokters'));
    }

    public function updateJadwal(Request $request, $id)
    {
        $request->validate([
            'id_dokter' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $jadwal = JadwalPeriksa::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('dokter.jadwal.index')->with('success', 'Jadwal Dokter berhasil diperbarui.');
    }

    public function deleteJadwal($id)
    {
        $jadwal = JadwalPeriksa::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('dokter.jadwal.index')->with('success', 'Jadwal Dokter berhasil dihapus.');
    }

    public function periksaIndex()
    {
        $periksas = Periksa::with('daftarPoli')->get();
        return view('dokter.periksa.index', compact('periksas'));
    }

    // Menampilkan form tambah periksa
    public function createPeriksa()
    {
        $daftarPolis = DaftarPoli::all();
        return view('dokter.periksa.create', compact('daftarPolis'));
    }

    // Menyimpan data periksa
    public function storePeriksa(Request $request)
    {
        $validated = $request->validate([
            'id_daftar_poli' => 'required|exists:daftar_polis,id',
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'required|integer|min:0',
        ]);

        Periksa::create($validated);

        return redirect()->route('dokter.periksa.index')->with('success', 'Data periksa berhasil ditambahkan.');
    }

    // Menampilkan form edit periksa
    public function editPeriksa($id)
    {
        $periksa = Periksa::findOrFail($id);
        $daftarPolis = DaftarPoli::all();

        return view('dokter.periksa.edit', compact('periksa', 'daftarPolis'));
    }

    // Memperbarui data periksa
    public function updatePeriksa(Request $request, $id)
    {
        $periksa = Periksa::findOrFail($id);

        $validated = $request->validate([
            'id_daftar_poli' => 'required|exists:daftar_polis,id',
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'required|integer|min:0',
        ]);

        $periksa->update($validated);

        return redirect()->route('dokter.periksa.index')->with('success', 'Data periksa berhasil diperbarui.');
    }

    // Menghapus data periksa
    public function deletePeriksa($id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        return redirect()->route('dokter.periksa.index')->with('success', 'Data periksa berhasil dihapus.');
    }
}
