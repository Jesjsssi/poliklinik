<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Tambah Poli</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <h1 class="text-2xl font-bold mb-4">Tambah Poli</h1>

            <form action="{{ route('admin.poli.store') }}" method="POST" class="bg-gray-100 p-6 rounded-lg">
                @csrf
                <div class="mb-4">
                    <label for="nama_poli" class="block text-sm font-medium text-gray-700">Nama Poli</label>
                    <input type="text" id="nama_poli" name="nama_poli"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('nama_poli') }}" required>
                </div>

                <div class="mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="3"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500">{{ old('keterangan') }}</textarea>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.poli.index') }}"
                        class="bg-gray-500 px-4 py-2 rounded text-white hover:bg-gray-600">Kembali</a>
                    <button type="submit"
                        class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>