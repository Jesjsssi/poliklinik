<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body class="bg-gray-50 text-black">

    <div class="flex">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-6 ml-64 mt-12">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
            </div>

            <div class="mb-8">
    
                <!-- Summary Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Card Dokter -->
                    <div class="bg-white shadow-xl rounded-lg p-6 hover:shadow-2xl transition-shadow duration-300">
                        <h2 class="text-lg font-semibold text-gray-700 mb-3">Total Dokter</h2>
                        <p class="text-4xl font-bold text-blue-600">{{ $dokterCount }}</p>
                        <a href="{{ route('admin.dokter.index') }}" class="mt-4 inline-block text-sm text-blue-500 hover:underline">Lihat Detail</a>
                    </div>

                    <!-- Card Pasien -->
                    <div class="bg-white shadow-xl rounded-lg p-6 hover:shadow-2xl transition-shadow duration-300">
                        <h2 class="text-lg font-semibold text-gray-700 mb-3">Total Pasien</h2>
                        <p class="text-4xl font-bold text-green-600">{{ $pasienCount }}</p>
                        <a href="{{ route('admin.pasien.index') }}" class="mt-4 inline-block text-sm text-green-500 hover:underline">Lihat Detail</a>
                    </div>

                    <!-- Card Poli -->
                    <div class="bg-white shadow-xl rounded-lg p-6 hover:shadow-2xl transition-shadow duration-300">
                        <h2 class="text-lg font-semibold text-gray-700 mb-3">Total Poli</h2>
                        <p class="text-4xl font-bold text-orange-600">{{ $poliCount }}</p>
                        <a href="{{ route('admin.poli.index') }}" class="mt-4 inline-block text-sm text-orange-500 hover:underline">Lihat Detail</a>
                    </div>

                    <!-- Card Obat -->
                    <div class="bg-white shadow-xl rounded-lg p-6 hover:shadow-2xl transition-shadow duration-300">
                        <h2 class="text-lg font-semibold text-gray-700 mb-3">Total Obat</h2>
                        <p class="text-4xl font-bold text-purple-600">{{ $obatCount }}</p>
                        <a href="{{ route('admin.obat.index') }}" class="mt-4 inline-block text-sm text-purple-500 hover:underline">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">Recent Data</h2>

                <!-- Recent Data Tabels -->
                <div class="overflow-x-auto bg-white rounded-lg shadow-lg mb-8">
                    <table class="w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Dokter</th>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Poli</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestDokters as $dokter)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-2 border border-gray-300">{{ $dokter->nama }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $dokter->poli->nama_poli }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto bg-white rounded-lg shadow-lg mb-8">
                    <table class="w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Pasien</th>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">No. RM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestPasiens as $pasien)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-2 border border-gray-300">{{ $pasien->nama }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $pasien->no_rm }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto bg-white rounded-lg shadow-lg mb-8">
                    <table class="w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Poli</th>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestPolis as $poli)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-2 border border-gray-300">{{ $poli->nama_poli }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $poli->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="overflow-x-auto bg-white rounded-lg shadow-lg mb-8">
                    <table class="w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Obat</th>
                                <th class="px-4 py-2 text-left border border-gray-300 text-gray-600">Kemasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latestObats as $obat)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-4 py-2 border border-gray-300">{{ $obat->nama_obat }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $obat->kemasan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
