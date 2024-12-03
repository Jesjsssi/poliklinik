<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Authentication Error</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-red-100">
    <div class="w-full max-w-md p-6 bg-white rounded-md shadow-md">
        <h1 class="text-3xl font-bold text-center text-gray-700">Authentication Error</h1>
        <p class="text-center text-red-500">Your credentials are incorrect. Please try again.</p>
        <div class="mt-6 text-center">
            <a href="{{ route('auth.login') }}" class="text-blue-600 hover:underline">Back to Login</a>
        </div>
    </div>
</body>

</html>
