<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellisoft Nepal | IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-gray-50 text-slate-900">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-800 tracking-tight">IntelliSoft</div>
            <div class="hidden md:flex space-x-8 text-gray-600 font-semibold text-sm">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600">About Us</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
                <a href="/admin" class="bg-blue-800 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Admin Login</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-400 py-12 mt-20">
        <div class="container mx-auto px-6 text-center">
            <p class="text-white font-bold mb-2">Intellisoft Nepal Pvt. Ltd.</p>
            <p class="text-sm">&copy; 2026 All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
