<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Daftar Poli</title>
</head>

<body class="bg-white text-black">
    @extends('layouts.dashboard_layout')<!-- Pastikan menggunakan layout yang sesuai -->

    @section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Detail Pendaftaran Poli</h2>

        <div class="bg-white shadow rounded p-6">
            <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                <tbody>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Poli</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->nama_poli }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Dokter</td>
                        <td class="px-4 py-2 border border-gray-300">{{ optional($daftarPoli->jadwal->dokter)->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Hari</td>
                        <td class="px-4 py-2 border border-gray-300">{{ optional($daftarPoli->jadwal)->hari }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Jam Mulai</td>
                        <td class="px-4 py-2 border border-gray-300">{{ optional($daftarPoli->jadwal)->jam_mulai }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Jam Selesai</td>
                        <td class="px-4 py-2 border border-gray-300">{{ optional($daftarPoli->jadwal)->jam_selesai }}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">Keluhan</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->keluhan }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold border border-gray-300">No Antrian</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->no_antrian }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>