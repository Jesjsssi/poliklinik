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

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <h1 class="text-2xl font-bold mb-4">Tambah Periksa</h1>

            <form action="{{ route('dokter.periksa.store') }}" method="POST" class="bg-white p-6 rounded shadow">
                @csrf

                <div class="mb-4">
                    <label for="id_daftar_poli" class="block font-medium">Poli</label>
                    <select name="id_daftar_poli" id="id_daftar_poli" class="w-full border-gray-300 rounded p-2">
                        @foreach ($daftarPolis as $poli)
                            <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tgl_periksa" class="block font-medium">Tanggal Periksa</label>
                    <input type="datetime-local" name="tgl_periksa" id="tgl_periksa" class="w-full border-gray-300 rounded p-2">
                </div>

                <div class="mb-4">
                    <label for="biaya_periksa" class="block font-medium">Biaya Periksa</label>
                    <input type="number" name="biaya_periksa" id="biaya_periksa" class="w-full border-gray-300 rounded p-2">
                </div>

                <div class="mb-4">
                    <label for="catatan" class="block font-medium">Catatan</label>
                    <textarea name="catatan" id="catatan" rows="3" class="w-full border-gray-300 rounded p-2"></textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
