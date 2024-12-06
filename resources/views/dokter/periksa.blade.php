<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Pemeriksaan Dokter</title>
</head>

<body class="bg-white text-black">

    <div class="flex">

        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Jadwal Pemeriksaan</h1>
                <div class="flex gap-4">
                    <button class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">+ Tambah Jadwal</button>
                </div>
            </div>

            <div class="relative flex justify-end">
                <input type="text" placeholder="Cari jadwal..."
                    class="w-full max-w-xs bg-gray-200 px-4 py-2 rounded-lg text-black placeholder-gray-500" />
            </div>

            <div class="overflow-x-auto mt-4">
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-black">
                            <th class="px-4 py-2 text-left">Nama Dokter</th>
                            <th class="px-4 py-2 text-left">Hari</th>
                            <th class="px-4 py-2 text-left">Jam Mulai</th>
                            <th class="px-4 py-2 text-left">Jam Selesai</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($periksas as $periksa)
                            <tr class="bg-gray-100 hover:bg-gray-200">
                                <td class="px-4 py-2">{{ $periksa->daftarPoli->dokter->nama ?? 'Dokter tidak ditemukan' }}
                                </td>
                                <td class="px-4 py-2">{{ $periksa->daftarPoli->hari }}</td>
                                <td class="px-4 py-2">{{ $periksa->daftarPoli->jam_mulai }}</td>
                                <td class="px-4 py-2">{{ $periksa->daftarPoli->jam_selesai }}</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <button class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit</button>
                                    <!-- <button class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Hapus</button> -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
