<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Edit Dokter</title>
</head>

<body class="bg-white text-black">

    <div class="flex">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit Dokter</h1>
            </div>

            <form action="{{ route('admin.dokter.update', $dokter->id) }}" method="POST"
                class="bg-gray-100 p-6 rounded-lg">
                @csrf

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ $dokter->nama }}" required>
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>{{ $dokter->alamat }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                    <input type="text" id="no_hp" name="no_hp"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ $dokter->no_hp }}" required>
                </div>

                <div class="mb-4">
                    <label for="id_poli" class="block text-sm font-medium text-gray-700">Poli</label>
                    <select id="id_poli" name="id_poli"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>
                        <option value="" disabled>Pilih Poli</option>
                        @foreach ($polis as $poli)
                            <option value="{{ $poli->id }}" {{ $dokter->id_poli == $poli->id ? 'selected' : '' }}>
                                {{ $poli->nama_poli }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.dokter.index') }}"
                        class="bg-gray-500 px-4 py-2 rounded text-white hover:bg-gray-600">Kembali</a>
                    <button type="submit"
                        class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Update</button>
                </div>
            </form>

        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>