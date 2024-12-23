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

    <div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-lg mt-8">
        <h2 class="text-3xl font-semibold mb-6 text-center">Form Pemeriksaan Pasien</h2>

        <form action="{{ route('dokter.periksa.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Nama Pasien -->
            <div>
                <label for="nama_pasien" class="block text-lg font-medium text-gray-700 mb-2">Nama Pasien</label>
                <input type="text" id="nama_pasien" name="nama_pasien"
                    value="{{ isset($daftarPoli) ? $daftarPoli->pasien->nama : '' }}" readonly
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <!-- Tanggal Periksa -->
            <div>
                <label for="tgl_periksa" class="block text-lg font-medium text-gray-700 mb-2">Tanggal Periksa</label>
                <input type="date" id="tgl_periksa" name="tgl_periksa" value="{{ now()->toDateString() }}"
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <!-- Catatan -->
            <div>
                <label for="catatan" class="block text-lg font-medium text-gray-700 mb-2">Catatan</label>
                <textarea id="catatan" name="catatan" rows="4"
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
            </div>

            <!-- Daftar Obat -->
            <div>
                <label for="obat" class="block text-lg font-medium text-gray-700 mb-2">Daftar Obat</label>
                <select id="obat" name="obat[]" multiple
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none">
                    @foreach ($obats as $obat)
                        <option value="{{ $obat->id }}" data-harga="{{ $obat->harga }}">
                            {{ $obat->nama_obat }} - Rp {{ number_format($obat->harga) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Biaya Periksa -->
            <div>
                <label for="biaya_periksa" class="block text-lg font-medium text-gray-700 mb-2">Biaya Periksa</label>
                <input type="number" id="biaya_periksa" name="biaya_periksa"
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300 focus:outline-none" />
            </div>

            <!-- Total Harga -->
            <div>
                <label for="total_harga" class="block text-lg font-medium text-gray-700 mb-2">Total Harga</label>
                <input type="text" id="total_harga" name="total_harga" readonly
                    class="block w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 focus:outline-none" />
            </div>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Script untuk kalkulasi total harga -->
    <script>
        document.getElementById('obat').addEventListener('change', function () {
            const selectedOptions = Array.from(this.selectedOptions);
            const totalObatHarga = selectedOptions.reduce((total, option) => total + parseInt(option.dataset.harga || 0), 0);
            const biayaPeriksa = parseInt(document.getElementById('biaya_periksa').value || 0);
            document.getElementById('total_harga').value = totalObatHarga + biayaPeriksa;
        });

        document.getElementById('biaya_periksa').addEventListener('input', function () {
            const selectedOptions = Array.from(document.getElementById('obat').selectedOptions);
            const totalObatHarga = selectedOptions.reduce((total, option) => total + parseInt(option.dataset.harga || 0), 0);
            document.getElementById('total_harga').value = totalObatHarga + parseInt(this.value || 0);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>

</html>