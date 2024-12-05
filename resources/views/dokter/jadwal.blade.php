<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Jadwal Periksa</title>
</head>



<body class="bg-gray-900 text-white">

    <div class="flex">


        <x-sidebar></x-sidebar>


        <div class="flex-1 p-6 ml-64">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">All users</h1>
                <div class="flex gap-4">
                    <button class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">+ Add user</button>
                    <button class="bg-gray-700 px-4 py-2 rounded text-white hover:bg-gray-600">Export</button>
                </div>
            </div>

            <div class="relative">
                <input type="text" placeholder="Search for users"
                    class="w-full bg-gray-800 px-4 py-2 rounded-lg text-gray-300 placeholder-gray-500" />
            </div>

            <div class="overflow-x-auto mt-6">
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-gray-300">
                            <th class="px-4 py-2 text-left">Biography</th>
                            <th class="px-4 py-2 text-left">Position</th>
                            <th class="px-4 py-2 text-left">Country</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-gray-700 hover:bg-gray-600">
                            <td class="px-4 py-2 truncate">I love working with React and Flowbite</td>
                            <td class="px-4 py-2">Internal Accounts Associate</td>
                            <td class="px-4 py-2">Burkina Faso</td>
                            <td class="px-4 py-2">
                                <span class="inline-flex items-center">
                                    <span class="h-3 w-3 bg-green-500 rounded-full mr-2"></span> Active
                                </span>
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <button class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit
                                    user</button>
                                <button class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Delete
                                    user</button>
                            </td>
                        </tr>
                        <tr class="bg-gray-700 hover:bg-gray-600">
                            <td class="px-4 py-2 truncate">I love working with React and Flowbite</td>
                            <td class="px-4 py-2">Investor Response Orchestrator</td>
                            <td class="px-4 py-2">Mauritania</td>
                            <td class="px-4 py-2">
                                <span class="inline-flex items-center">
                                    <span class="h-3 w-3 bg-green-500 rounded-full mr-2"></span> Active
                                </span>
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <button class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit
                                    user</button>
                                <button class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Delete
                                    user</button>
                            </td>
                        </tr>
                        <tr class="bg-gray-700 hover:bg-gray-600">
                            <td class="px-4 py-2 truncate">I love working with React and Flowbite</td>
                            <td class="px-4 py-2">Corporate Group Agent</td>
                            <td class="px-4 py-2">Uganda</td>
                            <td class="px-4 py-2">
                                <span class="inline-flex items-center">
                                    <span class="h-3 w-3 bg-red-500 rounded-full mr-2"></span> Offline
                                </span>
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                <button class="bg-blue-600 px-3 py-1 rounded text-white hover:bg-blue-700">Edit
                                    user</button>
                                <button class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Delete
                                    user</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
