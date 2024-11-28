<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <title>Home</title>
</head>

<body class="h-full bg-gray-50">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <x-header></x-header>

        <main>
            <div class="flex flex-col items-center px-6 py-12 lg:flex-row lg:justify-center lg:px-12 lg:py-24">
                <!-- Left Content -->
                <div class="lg:w-1/2">
                    <h1 class="text-green-600 text-lg font-semibold">Dr. Matthew Anderson</h1>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2">A dedicated doctor you can trust</h2>
                    <p class="text-gray-600 mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum eget vel, nunc nulla feugiat.
                        Metus ut.
                    </p>
                    <button
                        class="mt-6 bg-blue-600 text-white font-medium py-3 px-6 rounded-full hover:bg-blue-500 transition">
                        Book an appointment
                    </button>
                </div>

                <!-- Right Content (Image Section) -->
                <div class="lg:w-1/2 mt-8 lg:mt-0 flex justify-center">
                    <div class="relative w-72 h-72 bg-blue-200 rounded-full flex items-center justify-center">
                        <!-- Example Illustration -->
                        <img src="doctor-illustration.png" alt="Doctors"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="bg-white py-12">
                <div class="container mx-auto px-6 lg:px-12">
                    <div class="flex flex-wrap gap-6 justify-center">
                        <!-- Feature Item 1 -->
                        <div class="bg-blue-100 rounded-lg px-6 py-4 text-center w-80">
                            <h3 class="text-xl font-bold text-gray-900">24 hour service</h3>
                            <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <!-- Feature Item 2 -->
                        <div class="bg-blue-100 rounded-lg px-6 py-4 text-center w-80">
                            <h3 class="text-xl font-bold text-gray-900">8 years of experience</h3>
                            <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>

                        <!-- Feature Item 3 -->
                        <div class="bg-blue-100 rounded-lg px-6 py-4 text-center w-80">
                            <h3 class="text-xl font-bold text-gray-900">High quality care</h3>
                            <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
