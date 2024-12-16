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

    @extends('layouts.dashboard_layout')

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

                <!-- Daftar Pasien yang Sudah Terdaftar -->
                <div class="w-full lg:w-2/3 mx-auto mt-6">
                    <h2 class="text-xl font-bold mb-4">Daftar Pasien Terdaftar</h2>
                    <div class="overflow-x-auto mt-4">
                        <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="px-4 py-2 border border-gray-300">No</th>
                                    <th class="px-4 py-2 border border-gray-300">Poli</th>
                                    <th class="px-4 py-2 border border-gray-300">Dokter</th>
                                    <th class="px-4 py-2 border border-gray-300">Hari</th>
                                    <th class="px-4 py-2 border border-gray-300">Mulai</th>
                                    <th class="px-4 py-2 border border-gray-300">Selesai</th>
                                    <th class="px-4 py-2 border border-gray-300">Antrian</th>
                                    <th class="px-4 py-2 border border-gray-300">Status</th>
                                    <th class="px-4 py-2 border border-gray-300">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($daftarPolis as $daftarPoli)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-4 py-2 border border-gray-300 text-center">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            {{ optional($daftarPoli->poli)->nama_poli }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            {{ optional($daftarPoli->jadwal->dokter)->nama }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            {{ optional($daftarPoli->jadwal)->hari }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            {{ optional($daftarPoli->jadwal)->jam_mulai }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            {{ optional($daftarPoli->jadwal)->jam_selesai }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300 text-center">
                                            {{ $daftarPoli->no_antrian }}
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300 text-center">
                                            <span
                                                class="px-2 py-1 rounded text-white {{ $daftarPoli->status == 'selesai' ? 'bg-green-600' : 'bg-yellow-500' }}">
                                                {{ ucfirst($daftarPoli->status ?? 'menunggu') }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300 text-center">
                                            <button onclick="showDetail({{ $daftarPoli->id }})"
                                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Detail</button>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-4 text-gray-500">Belum ada pasien yang
                                            terdaftar.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>

                    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Detail Pendaftaran Poli</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <tr>
                                            <th>Poli</th>
                                            <td id="poli"></td>
                                        </tr>
                                        <tr>
                                            <th>Dokter</th>
                                            <td id="dokter"></td>
                                        </tr>
                                        <tr>
                                            <th>Hari</th>
                                            <td id="hari"></td>
                                        </tr>
                                        <tr>
                                            <th>Jam Mulai</th>
                                            <td id="jam_mulai"></td>
                                        </tr>
                                        <tr>
                                            <th>Jam Selesai</th>
                                            <td id="jam_selesai"></td>
                                        </tr>
                                        <tr>
                                            <th>Keluhan</th>
                                            <td id="keluhan"></td>
                                        </tr>
                                        <tr>
                                            <th>No Antrian</th>
                                            <td id="no_antrian"></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td id="status"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showDetail(id) {
            fetch(`/pasien/poli/${id}`)
                .then(response => response.json())
                .then(data => {
                    // Isi modal dengan data yang diterima
                    document.getElementById('poli').textContent = data.poli.nama_poli ?? '-';
                    document.getElementById('dokter').textContent = data.jadwal.dokter.nama ?? '-';
                    document.getElementById('hari').textContent = data.jadwal.hari ?? '-';
                    document.getElementById('jam_mulai').textContent = data.jadwal.jam_mulai ?? '-';
                    document.getElementById('jam_selesai').textContent = data.jadwal.jam_selesai ?? '-';
                    document.getElementById('keluhan').textContent = data.keluhan;
                    document.getElementById('no_antrian').textContent = data.no_antrian;
                    document.getElementById('status').textContent = data.status ? data.status.charAt(0).toUpperCase() + data.status.slice(1) : 'Menunggu';

                    // Tampilkan modal
                    $('#detailModal').modal('show');
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal mengambil detail data.');
                });
        }
    </script>

</body>

</html>