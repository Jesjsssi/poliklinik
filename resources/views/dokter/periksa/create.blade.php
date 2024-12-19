<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Tambah Periksa</title>
</head>

<body class="bg-gray-50 text-gray-900">
    @extends('layouts.dokter_layout')

    <div class="flex">

        <div class="flex-1 p-6 ml-64 mt-12">
            <h1 class="text-2xl font-bold mb-4">Tambah Periksa</h1>

            <form action="{{ route('dokter.periksa.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_daftar_poli" class="block text-sm font-medium text-gray-700">Poli</label>
                    <select name="id_daftar_poli" id="id_daftar_poli" class="block w-full mt-1">
                        @foreach ($polis as $poli)
                        <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tgl_periksa" class="block text-sm font-medium text-gray-700">Tanggal Periksa</label>
                    <input type="date" name="tgl_periksa" id="tgl_periksa" class="block w-full mt-1">
                </div>

                <div class="mb-4">
                    <label for="biaya_periksa" class="block text-sm font-medium text-gray-700">Biaya Periksa</label>
                    <input type="text" name="biaya_periksa" id="biaya_periksa" class="block w-full mt-1" required>
                </div>

                <div class="mb-4">
                    <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan</label>
                    <textarea name="catatan" id="catatan" class="block w-full mt-1"></textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>

</html>