<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Daftar Periksa</title>
</head>

<body class="bg-gray-50 text-gray-900">
    @extends('layouts.dokter_layout')

    <div class="flex">


        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Periksa</h1>
               
            </div>

            @if(session('success'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto mt-4">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border">No</th>
                            <th class="px-4 py-2 border">Nama Pasien</th>
                            <th class="px-4 py-2 border">Keluhan</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarPolis as $index => $poli)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $poli->pasien->nama }}</td>
                                <td class="px-4 py-2 border">{{ $poli->keluhan }}</td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('dokter.periksa.create', ['id' => $poli->id]) }}"
                                        class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Periksa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>

</html>