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
    <header class="text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
        <h1 class="text-5xl font-bold">Welcome to My Modern Website</h1>
        <p class="mt-4 text-lg">Experience simplicity and elegance.</p>
        <a href="/about" class="mt-6 inline-block bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition">Learn More</a>
    </header>

    <section class="container mx-auto my-16 px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Our Features</h2>
        <div class="mt-10 grid md:grid-cols-3 gap-10">
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Fast Performance</h3>
                <p class="text-gray-600 mt-2">Optimized for speed and efficiency.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Responsive Design</h3>
                <p class="text-gray-600 mt-2">Looks great on all devices.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Easy to Use</h3>
                <p class="text-gray-600 mt-2">User-friendly and intuitive interface.</p>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2025 Modern Web. All rights reserved.</p>
    </footer>
    
</body>
</html>