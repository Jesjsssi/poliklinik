<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dokter;
use App\Models\Poli;

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
        $dokter->update($request->all());
        return redirect()->route('admin.dokter.index')->with('success', 'Dokter updated successfully');
    }

     public function deleteDokter($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('admin.dokter.index')->with('success', 'Dokter deleted successfully');
    }



}
