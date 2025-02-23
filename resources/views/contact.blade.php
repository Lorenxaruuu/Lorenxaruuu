<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

    <div class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center px-6">
        <div>
            <h1 class="text-6xl font-bold">Get in Touch</h1>
            <p class="mt-4 text-lg opacity-80">We'd love to hear from you</p>
        </div>
    </div>

    <div class="container mx-auto my-16 px-6 text-center">
        <h2 class="text-4xl font-bold text-gray-800">Contact Information</h2>
        <div class="mt-10 p-8 bg-white shadow-xl rounded-lg">
            <p class="text-gray-600 text-lg"><strong>Email:</strong> Lorence.maranga@hcdc.edu.ph</p>
            <p class="text-gray-600 text-lg mt-2"><strong>Phone:</strong> 0995 657 2066</p>
            <p class="text-gray-600 text-lg mt-2"><strong>Address:</strong> Indangan, Davao City, Philippines</p>
        </div>
    </div>

    <footer class="bg-gray-900 text-white text-center py-6">
        <p class="opacity-80">&copy; 2025 Modern Web. All rights reserved.</p>
    </footer>
</body>
</html>
