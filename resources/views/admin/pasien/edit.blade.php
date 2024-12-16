<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Edit Pasien</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit Pasien</h1>
            </div>

            <form action="{{ route('admin.pasien.update', $pasien->id) }}" method="POST" class="bg-gray-100 p-6 rounded-lg">
                @csrf


                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('nama', $pasien->nama) }}" required>
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        required>{{ old('alamat', $pasien->alamat) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="no_ktp" class="block text-sm font-medium text-gray-700">No KTP</label>
                    <input type="text" id="no_ktp" name="no_ktp"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('no_ktp', $pasien->no_ktp) }}" required>
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP</label>
                    <input type="text" id="no_hp" name="no_hp"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('no_hp', $pasien->no_hp) }}" required>
                </div>

                <div class="mb-4">
                    <label for="no_rm" class="block text-sm font-medium text-gray-700">No RM</label>
                    <input type="text" id="no_rm" name="no_rm"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-500"
                        value="{{ old('no_rm', $pasien->no_rm) }}" required>
                </div>

                <div class="flex justify-end gap-4">
                    <a href="{{ route('admin.pasien.index') }}"
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
