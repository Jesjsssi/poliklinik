<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Daftar Periksa</title>
</head>

<body class="bg-white text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Periksa</h1>
                <a href="{{ route('dokter.periksa.create') }}"
                    class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">Tambah Periksa</a>
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
                            <th class="px-4 py-2 text-left border border-gray-300">Tanggal Periksa</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Poli</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Biaya</th>
                            <th class="px-4 py-2 text-left border border-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periksas as $periksa)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $periksa->tgl_periksa }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $periksa->daftarPoli->nama_poli }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $periksa->biaya_periksa }}</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <a href="{{ route('dokter.periksa.edit', $periksa->id) }}"
                                        class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit</a>
                                    <form action="{{ route('dokter.periksa.destroy', $periksa->id) }}" method="POST"
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
