<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalPeriksa;
use App\Models\Dokter;
use App\Models\Periksa;
use App\Models\DaftarPoli;
use App\Models\Poli;
use Illuminate\Support\Facades\Hash;


class DokterController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.dokter'); // Ensure you have this view
    }

    public function loginDokter(Request $request)
    {
        // Validate the input
        $request->validate([
            'nama' => 'required|string|max:255', // Validate nama
            'password' => 'required|string|min:6', // Validate password
        ]);

        // Find dokter by nama
        $dokter = Dokter::where('nama', $request->nama)->first();

        // Check if dokter exists and if password matches
        if ($dokter && Hash::check($request->password, $dokter->password)) {
            // Store dokter ID in session
            session(['dokter_id' => $dokter->id]);

            // Redirect to dokter dashboard
            return redirect()->route('dokter.dashboard')->with('success', 'Login berhasil!');
        }

        // If credentials are invalid, return with error
        return back()->with('error', 'Nama atau password tidak cocok.');
    }

    public function index()
    {
        $dokter = Dokter::find(session('dokter_id'));

        // If dokter is found in session, show dashboard
        if ($dokter) {
            return view('dokter.dashboard', compact('dokter'));
        }

        // If dokter not found in session, redirect to login
        return redirect()->route('auth.dokter');
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
        // Validasi input
        $request->validate([
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Ambil dokter yang sedang login
        $dokter = Dokter::find(session('dokter_id'));

        // Pastikan dokter ditemukan
        if (!$dokter) {
            return redirect()->route('dokter.jadwal.index')->with('error', 'Anda tidak memiliki akses.');
        }

        // Simpan jadwal dengan dokter yang sedang login
        JadwalPeriksa::create([
            'id_dokter' => $dokter->id,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        return redirect()->route('dokter.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }


    public function editJadwal($id)
    {
        $jadwalPeriksa = JadwalPeriksa::findOrFail($id); // Mengambil data berdasarkan ID
        $dokters = Dokter::all(); // Mengambil data dokter
        return view('dokter.jadwal.edit', compact('jadwalPeriksa', 'dokters'));
    }

    public function updateJadwal(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Ambil data dokter yang sedang login
        $dokter = Dokter::find(session('dokter_id'));

        if (!$dokter) {
            return redirect()->route('dokter.jadwal.index')->with('error', 'Anda tidak memiliki akses.');
        }

        // Cari jadwal berdasarkan ID dan pastikan jadwal milik dokter yang login
        $jadwal = JadwalPeriksa::where('id', $id)->where('id_dokter', $dokter->id)->first();

        if (!$jadwal) {
            return redirect()->route('dokter.jadwal.index')->with('error', 'Jadwal tidak ditemukan atau Anda tidak berhak mengubahnya.');
        }

        // Update data jadwal
        $jadwal->update([
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        return redirect()->route('dokter.jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
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

    //Dokter Profil
    public function dokterProfil()
    {
        // Assuming the logged-in user is the doctor whose profile we're displaying
        $dokter = auth()->user();
        return view('dokter.profil.index', compact('dokter'));
    }

    // Store doctor profile (when creating a new doctor)
    public function storeDokter(Request $request)
    {
        $dokter = Dokter::find($request->id);

        if ($dokter) {
            // Jika dokter sudah ada, lakukan update
            $dokter->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'id_poli' => $request->id_poli,
            ]);
            return redirect()->route('dokter.profil.index', ['id' => $dokter->id])
                ->with('success', 'Dokter berhasil diperbarui.');
        } else {
            // Jika dokter tidak ada, buat dokter baru
            Dokter::create($request->all());
            return redirect()->route('dokter.profil.index')
                ->with('success', 'Dokter berhasil dibuat.');
        }
    }



    // Edit doctor profile
    public function editDokter($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.profil.edit', compact('dokter'));
    }

    // Update doctor profile
    public function updateDokter(Request $request, $id)
    {
        // Menemukan data dokter berdasarkan ID
        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_poli' => 'required|exists:polis,id', // Validasi untuk id_poli
        ]);

        // Jika validasi gagal, form akan kembali dengan error messages.

        // Update data dokter
        $dokter->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_poli' => $request->id_poli,  // Pastikan id_poli sudah diambil dari input
        ]);

        // Redirect ke halaman daftar dokter dengan pesan sukses
        return redirect()->route('dokter.profil.index', ['id' => $dokter->id])
            ->with('success', 'Dokter berhasil diperbarui.');

    }

    public function updateStatus($id)
    {
        // Ambil jadwal berdasarkan ID
        $jadwal = JadwalPeriksa::findOrFail($id);

        // Cek apakah jadwal milik dokter yang sedang login
        $dokter = Dokter::find(session('dokter_id'));
        if (!$dokter || $jadwal->id_dokter != $dokter->id) {
            return redirect()->route('dokter.jadwal.index')->with('error', 'Anda tidak memiliki akses untuk mengubah status jadwal ini.');
        }

        // Toggle status antara 'aktif' dan 'tidak_aktif'
        $jadwal->status = ($jadwal->status == 'aktif') ? 'tidak_aktif' : 'aktif';
        $jadwal->save();

        return redirect()->route('dokter.jadwal.index')->with('success', 'Status jadwal berhasil diperbarui.');
    }



}
