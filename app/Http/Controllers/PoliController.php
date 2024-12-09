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
        return view('admin.poli.index', compact('polis'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('admin.poli.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
        ]);

        Poli::create($request->all());
        return redirect()->route('admin.poli.index')->with('success', 'Poli berhasil ditambahkan.');
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $poli = Poli::findOrFail($id);
        return view('admin.poli.edit', compact('poli'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_poli' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
        ]);

        $poli = Poli::findOrFail($id);
        $poli->update($request->all());
        return redirect()->route('admin.poli.index')->with('success', 'Poli berhasil diupdate.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $poli = Poli::findOrFail($id);
        $poli->delete();
        return redirect()->route('admin.poli.index')->with('success', 'Poli berhasil dihapus.');
    }
}
