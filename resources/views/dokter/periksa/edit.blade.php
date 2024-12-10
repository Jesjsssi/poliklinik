<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Edit Periksa</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <h1 class="text-2xl font-bold mb-6">Edit Periksa</h1>

            <form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="id_daftar_poli" class="block mb-2">Poli</label>
                    <select name="id_daftar_poli" id="id_daftar_poli" class="w-full px-4 py-2 border rounded">
                        @foreach($daftarPolis as $poli)
                            <option value="{{ $poli->id }}" {{ $periksa->id_daftar_poli == $poli->id ? 'selected' : '' }}>
                                {{ $poli->nama_poli }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tgl_periksa" class="block mb-2">Tanggal Periksa</label>
                    <input type="datetime-local" name="tgl_periksa" id="tgl_periksa"
                        class="w-full px-4 py-2 border rounded" value="{{ $periksa->tgl_periksa }}">
                </div>

                <div class="mb-4">
                    <label for="biaya_periksa" class="block mb-2">Biaya Periksa</label>
                    <input type="number" name="biaya_periksa" id="biaya_periksa" class="w-full px-4 py-2 border rounded"
                        value="{{ $periksa->biaya_periksa }}">
                </div>

                <div class="mb-4">
                    <label for="catatan" class="block mb-2">Catatan</label>
                    <textarea name="catatan" id="catatan" rows="3"
                        class="w-full px-4 py-2 border rounded">{{ $periksa->catatan }}</textarea>
                </div>

                <button type="submit" class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Simpan</button>
            </form>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>