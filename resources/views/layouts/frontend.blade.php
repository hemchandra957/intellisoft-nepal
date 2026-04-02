<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellisoft Nepal | IT Solutions</title>

    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

    <style>
        .nav-link-active {
            background: linear-gradient(to right, #dbeafe, #eff6ff);
            color: #1e40af;
            border-radius: 0.5rem;
        }
    </style>
</head>

<body class="bg-gray-50 text-slate-900 dark:bg-[#0b1120] dark:text-gray-200 transition-colors duration-300">

<!-- ✅ NAVBAR -->
<nav class="bg-white/70 dark:bg-[#0b1120]/80 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 dark:border-gray-800">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}"
           class="text-2xl font-extrabold text-blue-800 dark:text-white flex items-center gap-2 group">
            <div class="bg-blue-800 text-white p-2 rounded-lg shadow-md group-hover:rotate-12 transition">
                <i class="fas fa-code-branch"></i>
            </div>
            IntelliSoft
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-2 text-sm font-semibold">

            @php $linkClass = "px-4 py-2 rounded-lg transition-all duration-300"; @endphp

            <a href="{{ route('home') }}"
               class="{{ $linkClass }} {{ request()->routeIs('home') ? 'nav-link-active' : 'text-gray-600 dark:text-gray-300 hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Home
            </a>

            <a href="{{ route('services') }}"
               class="{{ $linkClass }} {{ request()->routeIs('services') ? 'nav-link-active' : 'hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Services
            </a>

            <a href="{{ route('projects') }}"
               class="{{ $linkClass }} {{ request()->routeIs('projects') ? 'nav-link-active' : 'hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Projects
            </a>

            <a href="{{ route('blogs') }}"
               class="{{ $linkClass }} {{ request()->routeIs('blogs*') ? 'nav-link-active' : 'hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Blogs
            </a>

            <a href="{{ route('about') }}"
               class="{{ $linkClass }} {{ request()->routeIs('about') ? 'nav-link-active' : 'hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                About
            </a>

            <a href="{{ route('contact') }}"
               class="{{ $linkClass }} {{ request()->routeIs('contact') ? 'nav-link-active' : 'hover:text-blue-600 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Contact
            </a>

            <!-- Divider -->
            <div class="h-6 w-px bg-gray-200 dark:bg-gray-700 mx-2"></div>

            <!-- Dark Mode -->
            <button onclick="toggleDark()" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                🌙
            </button>

            <!-- Admin -->
            <a href="/admin"
               class="ml-2 bg-blue-800 text-white px-5 py-2.5 rounded-full hover:bg-blue-700 shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 active:scale-95">
                <i class="fas fa-user-shield mr-2"></i>Admin
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button onclick="toggleMenu()" class="md:hidden text-2xl">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-2">
        <a href="{{ route('home') }}" class="block py-2">Home</a>
        <a href="{{ route('services') }}" class="block py-2">Services</a>
        <a href="{{ route('projects') }}" class="block py-2">Projects</a>
        <a href="{{ route('blogs') }}" class="block py-2">Blogs</a>
        <a href="{{ route('about') }}" class="block py-2">About</a>
        <a href="{{ route('contact') }}" class="block py-2">Contact</a>
    </div>
</nav>

<!-- ✅ MAIN -->
<main class="min-h-screen">
    @yield('content')
</main>

<!-- ✅ FOOTER -->
<footer class="bg-[#0b1120] text-gray-400 pt-20 pb-10">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- Brand -->
            <div>
                <h2 class="text-2xl font-bold text-white mb-4">IntelliSoft</h2>
                <p class="text-sm leading-relaxed mb-6">
                    Delivering modern digital solutions for Nepal’s future.
                </p>

                <div class="flex gap-4 text-lg">
                    <i class="fab fa-facebook hover:text-blue-500 cursor-pointer"></i>
                    <i class="fab fa-twitter hover:text-blue-400 cursor-pointer"></i>
                    <i class="fab fa-linkedin hover:text-blue-600 cursor-pointer"></i>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ route('blogs') }}" class="hover:text-white">Blogs</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-white font-semibold mb-4">Services</h4>
                <ul class="space-y-3 text-sm">
                    <li>Web Development</li>
                    <li>Mobile Apps</li>
                    <li>Custom Software</li>
                    <li>IT Consulting</li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <p class="text-sm">Kathmandu, Nepal</p>
                <p class="text-sm">info@intellisoftnepal.com</p>
                <p class="text-white font-bold mt-2">+977-01-4790617</p>
            </div>

        </div>

        <div class="border-t border-gray-800 pt-6 text-center text-sm">
            © {{ date('Y') }} Intellisoft Nepal. All rights reserved.
        </div>

    </div>
</footer>

<!-- ✅ SCRIPTS -->
<script>
function toggleDark() {
    document.documentElement.classList.toggle("dark");
}

function toggleMenu() {
    document.getElementById("mobileMenu").classList.toggle("hidden");
}
</script>

</body>
</html>
