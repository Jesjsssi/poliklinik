<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Daftar Obat</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Obat</h1>
                <a href="{{ route('admin.obat.create') }}"
                    class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Tambah Obat</a>
            </div>

            @if(session('success'))
                <div class="bg-green-200 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto mt-4">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left border border-gray-300">No</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Nama Obat</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Kemasan</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Harga</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obats as $obat)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $obat->nama_obat }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $obat->kemasan }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ number_format($obat->harga, 0, ',', '.') }}
                                </td>
                                <td class="px-4 py-2 flex gap-2">
                                    <a href="{{ route('admin.obat.edit', $obat->id) }}"
                                        class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit</a>
                                    <form action="{{ route('admin.obat.destroy', $obat->id) }}" method="POST"
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