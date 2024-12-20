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

            <form action="{{ route('dokter.jadwal.store') }}" method="POST" class="space-y-4">
                @csrf
            
            
            
                <!-- Hari -->
                <div>
                    <label for="hari" class="block text-sm font-medium mb-1">Hari</label>
                    <select name="hari" id="hari"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-300">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
                </div>
            
                <!-- Jam Mulai -->
                <div>
                    <label for="jam_mulai" class="block text-sm font-medium mb-1">Jam Mulai</label>
                    <input type="time" name="jam_mulai" id="jam_mulai"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-300">
                </div>
            
                <!-- Jam Selesai -->
                <div>
                    <label for="jam_selesai" class="block text-sm font-medium mb-1">Jam Selesai</label>
                    <input type="time" name="jam_selesai" id="jam_selesai"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-blue-300">
                </div>
            
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 focus:ring focus:ring-blue-300">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
