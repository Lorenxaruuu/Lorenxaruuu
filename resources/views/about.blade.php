<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

    <header class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center px-6">
        <div>
            <h1 class="text-6xl font-bold">About Us</h1>
            <p class="mt-4 text-lg opacity-80">Bringing innovation and design together</p>
            <a href="/contact" class="mt-6 inline-block bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-200 transition">Get in Touch</a>
        </div>
    </header>

    <section class="container mx-auto my-16 px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-800">Why Choose Us?</h2>
        <div class="mt-10 grid md:grid-cols-3 gap-10">
            <div class="p-8 bg-white shadow-xl rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Fast Performance</h3>
                <p class="text-gray-600 mt-2">Optimized for speed and efficiency.</p>
            </div>
            <div class="p-8 bg-white shadow-xl rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Responsive Design</h3>
                <p class="text-gray-600 mt-2">Looks great on all devices.</p>
            </div>
            <div class="p-8 bg-white shadow-xl rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800">Easy to Use</h3>
                <p class="text-gray-600 mt-2">User-friendly and intuitive interface.</p>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white text-center py-6">
        <p class="opacity-80">&copy; 2025 Modern Web. All rights reserved.</p>
    </footer>
</body>
</html>
