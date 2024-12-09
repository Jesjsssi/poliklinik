<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Admin Pasien</title>
</head>

<body class="bg-white text-black">

    <div class="flex">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Pasien</h1>
                <div class="flex gap-4">
                    <a href="{{ route('admin.pasien.create') }}"
                        class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">+ Tambah Pasien</a>
                </div>
            </div>

            @if(session('success'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="relative flex justify-end mb-4">
                <input type="text" placeholder="Cari pasien..."
                    class="w-full max-w-xs bg-gray-200 px-4 py-2 rounded-lg text-black placeholder-gray-500" />
            </div>

            <div class="overflow-x-auto mt-4">
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-black">
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Nama</th>
                            <th class="px-4 py-2 text-left">Alamat</th>
                            <th class="px-4 py-2 text-left">No KTP</th>
                            <th class="px-4 py-2 text-left">No HP</th>
                            <th class="px-4 py-2 text-left">No RM</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasiens as $pasien)
                            <tr class="bg-gray-100 hover:bg-gray-200">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $pasien->nama }}</td>
                                <td class="px-4 py-2">{{ $pasien->alamat }}</td>
                                <td class="px-4 py-2">{{ $pasien->no_ktp }}</td>
                                <td class="px-4 py-2">{{ $pasien->no_hp }}</td>
                                <td class="px-4 py-2">{{ $pasien->no_rm }}</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <a href="{{ route('admin.pasien.edit', $pasien->id) }}"
                                        class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit</a>

                                    <form action="{{ route('admin.pasien.destroy', $pasien->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700"
                                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>