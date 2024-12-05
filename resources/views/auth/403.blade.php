<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center">
            <h1 class="text-4xl font-bold text-red-600">403</h1>
            <p class="text-xl mt-4">Forbidden</p>
            <p class="mt-2">You don't have permission to access this page.</p>
            <a href="{{ url('/') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Go to Homepage</a>
        </div>
    </div>
</body>

</html>
