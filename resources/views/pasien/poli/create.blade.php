<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Poli</title>
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-white text-black">
    @extends('layouts.dashboard_layout')

    <div class="flex">
        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Pendaftaran Poli</h1>
            </div>

            <form action="{{ route('pasien.poli.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_pasien" class="block">Pasien (No Rekam Medis)</label>
                    <select name="id_pasien" id="id_pasien" class="w-full p-2 border border-gray-300">
                        @foreach ($pasiens as $pasien)
                            <option value="{{ $pasien->id }}">{{ $pasien->no_rm }} - {{ $pasien->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="id_jadwal" class="block">Jadwal Periksa</label>
                    <select name="id_jadwal" id="id_jadwal" class="w-full p-2 border border-gray-300">
                        @foreach ($jadwals as $jadwal)
                            <option value="{{ $jadwal->id }}">
                                {{ $jadwal->hari }} - {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }} -
                                {{ optional($jadwal->dokter)->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="id_poli" class="block">Poli</label>
                    <select name="id_poli" id="id_poli" class="w-full p-2 border border-gray-300">
                        @foreach ($polis as $poli)
                            <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="keluhan" class="block">Keluhan</label>
                    <textarea name="keluhan" id="keluhan" class="w-full p-2 border border-gray-300" rows="3"
                        required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div>

</body>

</html>