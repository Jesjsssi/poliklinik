<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    // Menampilkan daftar poli
    public function index()
    {
        $polis = Poli::all();
        return view('polis.index', compact('polis'));
    }

    // Menampilkan form tambah poli
    public function create()
    {
        return view('polis.create');
    }

    // Menyimpan data poli baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
        ]);

        Poli::create($request->all());
        return redirect()->route('polis.index')->with('success', 'Poli berhasil ditambahkan.');
    }

    // Menampilkan detail poli (opsional)
    public function show(Poli $poli)
    {
        return view('polis.show', compact('poli'));
    }

    // Menampilkan form edit poli
    public function edit(Poli $poli)
    {
        return view('polis.edit', compact('poli'));
    }

    // Memperbarui data poli
    public function update(Request $request, Poli $poli)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
        ]);

        $poli->update($request->all());
        return redirect()->route('polis.index')->with('success', 'Poli berhasil diperbarui.');
    }

    // Menghapus poli
    public function destroy(Poli $poli)
    {
        $poli->delete();
        return redirect()->route('polis.index')->with('success', 'Poli berhasil dihapus.');
    }
}
