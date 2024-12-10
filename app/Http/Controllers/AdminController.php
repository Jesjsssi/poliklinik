<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\Pasien;
use App\Models\Obat;	

class AdminController extends Controller
{

    public function index()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Hitung jumlah data
            $dokterCount = Dokter::count();
            $pasienCount = Pasien::count();
            $poliCount = Poli::count();
            $obatCount = Obat::count();

            // Ambil data terbaru
            $latestDokters = Dokter::latest()->take(5)->get();
            $latestPasiens = Pasien::latest()->take(5)->get();
            $latestPolis = Poli::latest()->take(5)->get();
            $latestObats = Obat::latest()->take(5)->get();

            // Kirim data ke tampilan
            return view('admin.dashboard', compact(
                'dokterCount',
                'pasienCount',
                'poliCount',
                'obatCount',
                'latestDokters',
                'latestPasiens',
                'latestPolis',
                'latestObats'
            ));
        }

        return redirect()->route('auth.login');
    }

    public function dokterIndex()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', compact('dokters'));
    }

    public function createDokter()
    {
        $polis = Poli::all();
        return view('admin.dokter.create', compact('polis'));
    }

    public function storeDokter(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->route('admin.dokter.index')->with('success', 'Dokter created successfully');
    }

    public function editDokter($id)
    {
        $dokter = Dokter::findOrFail($id);
        $polis = Poli::all();
        return view('admin.dokter.edit', compact('dokter', 'polis'));
    }


    public function updateDokter(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_poli' => 'required|exists:polis,id',
        ]);

        // Update data
        $dokter->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_poli' => $request->id_poli,
        ]);

        // Redirect ke halaman daftar dokter dengan pesan sukses
        return redirect()->route('admin.dokter.index')->with('success', 'Dokter berhasil diperbarui.');
    }


    public function deleteDokter($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('admin.dokter.index')->with('success', 'Dokter deleted successfully');
    }

    //Admin Pasien
    // Menampilkan daftar pasien
    public function pasienIndex()
    {
        // Mengambil semua data pasien dari database
        $pasiens = Pasien::all();
        return view('admin.pasien.index', compact('pasiens'));
    }

    // Menampilkan form untuk menambah pasien
    public function createPasien()
    {
        return view('admin.pasien.create');
    }

    // Menyimpan data pasien baru
    public function storePasien(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens',
            'no_hp' => 'required|string|max:50',
            'no_rm' => 'required|string|max:25|unique:pasiens',
        ]);

        // Membuat pasien baru
        Pasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'no_rm' => $request->no_rm,
        ]);

        // Redirect ke halaman daftar pasien
        return redirect()->route('admin.pasien.index')->with('success', 'Pasien berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit pasien
    public function editPasien($id)
    {
        // Mencari pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    // Update data pasien
    public function updatePasien(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:255|unique:pasiens,no_ktp,' . $id,
            'no_hp' => 'required|string|max:50',
            'no_rm' => 'required|string|max:25|unique:pasiens,no_rm,' . $id,
        ]);

        // Cari pasien berdasarkan ID
        $pasien = Pasien::findOrFail($id);

        // Update data pasien
        $pasien->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'no_rm' => $request->no_rm,
        ]);

        // Redirect kembali ke daftar pasien
        return redirect()->route('admin.pasien.index')->with('success', 'Pasien berhasil diperbarui');
    }

    // Menghapus pasien berdasarkan ID
    public function deletePasien($id)
    {
        // Cari pasien berdasarkan ID dan hapus
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        // Redirect kembali ke daftar pasien
        return redirect()->route('admin.pasien.index')->with('success', 'Pasien berhasil dihapus');
    }

    
    // Show the list of all Poli
    public function obatIndex()
    {
        $obats = Obat::all();
        return view('admin.obat.index', compact('obats'));
    }

    // Tampilkan form tambah obat
    public function createObat()
    {
        return view('admin.obat.create');
    }

    // Simpan obat baru
    public function storeObat(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:50',
            'kemasan' => 'required|string|max:35',
            'harga' => 'required|integer|min:0',
        ]);

        Obat::create($request->all());

        return redirect()->route('admin.obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    // Tampilkan form edit obat
    public function editObat($id)
    {
        $obat = Obat::findOrFail($id);
        return view('admin.obat.edit', compact('obat'));
    }

    // Update data obat
    public function updateObat(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:50',
            'kemasan' => 'required|string|max:35',
            'harga' => 'required|integer|min:0',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update($request->all());

        return redirect()->route('admin.obat.index')->with('success', 'Obat berhasil diupdate.');
    }

    // Hapus obat
    public function deleteObat($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('admin.obat.index')->with('success', 'Obat berhasil dihapus.');
    }
    


}
