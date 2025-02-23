<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modern Design</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 p-5 flex justify-center text-lg shadow-lg">
        <ul class="flex space-x-5">
            <li><a href="/" class="text-white hover:bg-gray-600 px-6 py-3 rounded">Home</a></li>
            <li><a href="/contact" class="text-white hover:bg-gray-600 px-6 py-3 rounded">Contact</a></li>
            <li><a href="/about" class="text-white hover:bg-gray-600 px-6 py-3 rounded">About</a></li>
        </ul>
    </nav>
    <div>
    <h1 class="text-[100px] flex justify-center text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">Welcome to Homepage</h1>
    </div>
</body>
</html>
