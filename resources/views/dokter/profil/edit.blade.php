<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Profil Dokter</title>
</head>

<body class="bg-white text-black">
    @extends('layouts.dokter_layout')

    <div class="flex">
        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Profil Dokter</h1>
            </div>

            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('dokter.profil.update', $dokter->id) }}" method="POST" class="bg-gray-100 p-6 rounded-lg">
                @csrf
                @method('POST')

                <!-- Nama -->
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $dokter->nama) }}"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>
                    @error('nama')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>{{ old('alamat', $dokter->alamat) }}</textarea>
                    @error('alamat')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Nomor Telepon -->
                <div class="mb-4">
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $dokter->no_hp) }}"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>
                    @error('no_hp')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            
                <!-- Tombol -->
                <div class="flex justify-end gap-4">
                    <a href="{{ route('dokter.profil.index', ['id' => $dokter->id]) }}"
                        class="bg-gray-500 px-4 py-2 rounded text-white hover:bg-gray-600">Kembali</a>
                    <button type="submit" class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
