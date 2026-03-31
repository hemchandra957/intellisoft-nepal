<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellisoft Nepal | IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-800">IntelliSoft</div>
            <div class="hidden md:flex space-x-6 text-gray-600 font-medium">
                <a href="#" class="hover:text-blue-600">Home</a>
                <a href="#services" class="hover:text-blue-600">Services</a>
                <a href="#projects" class="hover:text-blue-600">Projects</a>
                <a href="/admin" class="bg-blue-800 text-white px-4 py-2 rounded-lg">Admin</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-900 text-white py-10 mt-20">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2026 Intellisoft Nepal. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
