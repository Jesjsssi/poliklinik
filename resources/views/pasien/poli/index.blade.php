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


    <div class="flex">

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Pendaftaran Poli</h1>
            </div>

            @if(session('success'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex space-x-6">
                <!-- Form Pendaftaran Pasien -->
                <div class="w-1/2">
                    <form action="{{ route('pasien.poli.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="id_pasien" class="block">Pasien</label>
                            <select name="id_pasien" id="id_pasien" class="w-full p-2 border border-gray-300">
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="id_jadwal" class="block">Jadwal Periksa</label>
                            <select name="id_jadwal" id="id_jadwal" class="w-full p-2 border border-gray-300">
                                @foreach ($jadwals as $jadwal)
                                    <option value="{{ $jadwal->id }}">{{ $jadwal->tgl_periksa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="keluhan" class="block">Keluhan</label>
                            <textarea name="keluhan" id="keluhan" class="w-full p-2 border border-gray-300" rows="3"
                                required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="no_antrian" class="block">No Antrian</label>
                            <input type="number" name="no_antrian" id="no_antrian"
                                class="w-full p-2 border border-gray-300" required>
                        </div>

                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                    </form>
                </div>

                <!-- Daftar Pasien yang Sudah Terdaftar -->
                <div class="w-1/2">
                    <h2 class="text-xl font-bold mb-4">Pasien yang Sudah Terdaftar</h2>

                    <div class="overflow-x-auto mt-4">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left border border-gray-300">No</th>
                                    <th class="px-4 py-2 text-left border border-gray-300">Nama Pasien</th>
                                    <th class="px-4 py-2 text-left border border-gray-300">Jadwal Periksa</th>
                                    <th class="px-4 py-2 text-left border border-gray-300">Keluhan</th>
                                    <th class="px-4 py-2 text-left border border-gray-300">No Antrian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarPolis as $daftarPoli)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->pasien->nama }}</td>
                                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->jadwal->tgl_periksa }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->keluhan }}</td>
                                        <td class="px-4 py-2 border border-gray-300">{{ $daftarPoli->no_antrian }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>