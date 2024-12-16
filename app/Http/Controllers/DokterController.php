<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalPeriksa;
use App\Models\Dokter;
use App\Models\Periksa;
use App\Models\DaftarPoli;
use App\Models\Poli;

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
        $periksas = Periksa::with('daftarPoli.poli')->get(); // Eager load relasi

        return view('dokter.periksa.index', compact('periksas'));
    }

    // Menampilkan form untuk membuat periksa baru
    public function createPeriksa()
    {
        $polis = Poli::all(); // Ambil data poli
        return view('dokter.periksa.create', compact('polis'));
    }

    // Menyimpan periksa yang baru dibuat
    public function storePeriksa(Request $request)
    {
        $request->validate([
            'id_daftar_poli' => 'required|exists:daftar_polis,id',
            'tgl_periksa' => 'required|date',
            'biaya_periksa' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        Periksa::create([
            'id_daftar_poli' => $request->id_daftar_poli,
            'tgl_periksa' => $request->tgl_periksa,
            'biaya_periksa' => $request->biaya_periksa,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('dokter.periksa.index');
    }

    // Menampilkan form untuk mengedit data periksa
    public function editPeriksa($id)
    {
        $periksa = Periksa::findOrFail($id);
        $polis = Poli::all();
        return view('dokter.periksa.edit', compact('periksa', 'polis'));
    }

    // Menyimpan perubahan data periksa
    public function updatePeriksa(Request $request, $id)
    {
        $request->validate([
            'id_daftar_poli' => 'required|exists:daftar_polis,id',
            'tgl_periksa' => 'required|date',
            'biaya_periksa' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        $periksa = Periksa::findOrFail($id);
        $periksa->update([
            'id_daftar_poli' => $request->id_daftar_poli,
            'tgl_periksa' => $request->tgl_periksa,
            'biaya_periksa' => $request->biaya_periksa,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('dokter.periksa.index');
    }

    // Menghapus data periksa
    public function deletePeriksa($id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        return redirect()->route('dokter.periksa.index');
    }
}
