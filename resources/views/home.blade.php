<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modern Design</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-gray-900 p-6 flex justify-center shadow-lg fixed w-full top-0 z-10">
        <ul class="flex space-x-8">
            <li><a href="/" class="text-white hover:text-gray-300 text-lg font-semibold">Home</a></li>
            <li><a href="/contact" class="text-white hover:text-gray-300 text-lg font-semibold">Contact</a></li>
            <li><a href="/about" class="text-white hover:text-gray-300 text-lg font-semibold">About</a></li>
        </ul>
    </nav>

    <div class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center px-6">
        <div>
            <h1 class="text-6xl font-bold mb-4">Welcome to My Modern Website</h1>
            <p class="text-lg opacity-80">A place where simplicity meets elegance</p>
            <a href="/about" class="mt-6 inline-block bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-200 transition">Learn More</a>
        </div>
    </div>
</body>
</html>
