<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-800 p-5 flex justify-center text-lg shadow-lg">
        <ul class="flex space-x-5">
            <li><a href="/" class="text-white hover:bg-gray-600 px-6 py-3 rounded">Home</a></li>
            <li><a href="/contact" class="text-white hover:bg-gray-600 px-6 py-3 rounded">Contact</a></li>
            <li><a href="/about" class="text-white hover:bg-gray-600 px-6 py-3 rounded">About</a></li>
        </ul>
    </nav>
    <h1 class="text-[100px] text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">Where to contact?</h1>
    <div class="flex justify-center items-center pt-4">
        <h1 class="text-3xl font-bold text-gray-800 bg-gray-200 px-3 py-1 rounded-lg shadow-md">Email: Lorence.maranga@hcdc.edu.ph</h1>
    </div>
</body>
</html>
