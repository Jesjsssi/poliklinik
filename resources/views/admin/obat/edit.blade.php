<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Edit Obat</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit Obat</h1>
            </div>

            <form action="{{ route('admin.obat.update', $obat->id) }}" method="POST" class="bg-gray-100 p-6 rounded-lg">
                @csrf
                <div class="mb-4">
                    <label for="nama_obat" class="block text-sm font-medium text-gray-700">Nama Obat</label>
                    <input type="text" id="nama_obat" name="nama_obat"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('nama_obat', $obat->nama_obat) }}" required>
                </div>

                <div class="mb-4">
                    <label for="kemasan" class="block text-sm font-medium text-gray-700">Kemasan</label>
                    <input type="text" id="kemasan" name="kemasan"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('kemasan', $obat->kemasan) }}" required>
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('harga', $obat->harga) }}" required>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.obat.index') }}"
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