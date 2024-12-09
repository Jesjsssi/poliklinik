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
            <h1 class="text-2xl font-bold mb-4">Edit Periksa</h1>

            <form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="space-y-4">
                    <div>
                        <label for="id_daftar_poli" class="block font-medium">Poli</label>
                        <select id="id_daftar_poli" name="id_daftar_poli" class="w-full px-4 py-2 rounded-md border"
                            required>
                            @foreach ($daftarPolis as $poli)
                                <option value="{{ $poli->id }}" {{ $poli->id == $periksa->id_daftar_poli ? 'selected' : '' }}>
                                    {{ $poli->nama_poli }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="tgl_periksa" class="block font-medium">Tanggal Periksa</label>
                        <input type="datetime-local" id="tgl_periksa" name="tgl_periksa"
                            class="w-full px-4 py-2 rounded-md border"
                            value="{{ \Carbon\Carbon::parse($periksa->tgl_periksa)->format('Y-m-d\TH:i') }}" required />
                    </div>
                    <div>
                        <label for="catatan" class="block font-medium">Catatan</label>
                        <textarea id="catatan" name="catatan"
                            class="w-full px-4 py-2 rounded-md border">{{ $periksa->catatan }}</textarea>
                    </div>
                    <div>
                        <label for="biaya_periksa" class="block font-medium">Biaya Periksa</label>
                        <input type="number" id="biaya_periksa" name="biaya_periksa"
                            class="w-full px-4 py-2 rounded-md border" value="{{ $periksa->biaya_periksa }}" required />
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Perbarui</button>
            </form>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>