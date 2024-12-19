<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Tambah Jadwal Dokter</title>
</head>

<body class="bg-white text-black">
@extends('layouts.dokter_layout')
    <div class="flex">

        <div class="flex-1 p-6 ml-64 mt-12">
            <h1 class="text-2xl font-bold mb-6">Tambah Jadwal Dokter</h1>

            <form action="{{ route('dokter.jadwal.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="id_dokter" class="block mb-2">Dokter</label>
                    <select name="id_dokter" id="id_dokter" class="w-full px-4 py-2 border rounded">
                        @foreach($dokters as $dokter)
                            <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="hari" class="block mb-2">Hari</label>
                    <select name="hari" id="hari" class="w-full px-4 py-2 border rounded">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="jam_mulai" class="block mb-2">Jam Mulai</label>
                    <input type="time" name="jam_mulai" id="jam_mulai" class="w-full px-4 py-2 border rounded">
                </div>

                <div class="mb-4">
                    <label for="jam_selesai" class="block mb-2">Jam Selesai</label>
                    <input type="time" name="jam_selesai" id="jam_selesai" class="w-full px-4 py-2 border rounded">
                </div>

                <button type="submit" class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Simpan</button>
            </form>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
