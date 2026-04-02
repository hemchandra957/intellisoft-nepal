<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Intellisoft Nepal | IT Solutions</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .nav-active {
            background: linear-gradient(to right, #dbeafe, #eff6ff);
            color: #1e40af;
            border-radius: 0.5rem;
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-slate-900 dark:bg-[#0b1120] dark:text-gray-200 transition duration-300">

<!-- ================= NAVBAR ================= -->
<nav class="sticky top-0 z-50 backdrop-blur-xl bg-white/70 dark:bg-[#0b1120]/80 border-b border-gray-100 dark:border-gray-800">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <!-- ✅ LOGO (UNCHANGED) -->
        <a href="{{ route('home') }}"
           class="text-2xl font-extrabold text-blue-800 dark:text-white flex items-center gap-2 group">
            <div class="bg-blue-800 text-white p-2 rounded-lg shadow-md group-hover:rotate-12 transition">
                <i class="fas fa-code-branch"></i>
            </div>
            IntelliSoft
        </a>

        <!-- DESKTOP MENU -->
        <div class="hidden md:flex items-center space-x-2 text-sm font-medium">

            @php $linkClass = "px-4 py-2 rounded-lg transition duration-200"; @endphp

            <a href="{{ route('home') }}"
               class="{{ $linkClass }} {{ request()->routeIs('home') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Home
            </a>

            <a href="{{ route('services') }}"
               class="{{ $linkClass }} {{ request()->routeIs('services') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Services
            </a>

            <a href="{{ route('projects') }}"
               class="{{ $linkClass }} {{ request()->routeIs('projects') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Projects
            </a>

            <a href="{{ route('career') }}"
               class="{{ $linkClass }} {{ request()->routeIs('career') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Career
            </a>

            <a href="{{ route('blogs') }}"
               class="{{ $linkClass }} {{ request()->routeIs('blogs*') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Blogs
            </a>

            <a href="{{ route('about') }}"
               class="{{ $linkClass }} {{ request()->routeIs('about') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                About
            </a>

            <a href="{{ route('contact') }}"
               class="{{ $linkClass }} {{ request()->routeIs('contact') ? 'nav-active' : 'hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                Contact
            </a>

            <!-- Divider -->
            <div class="h-6 w-px bg-gray-200 dark:bg-gray-700 mx-2"></div>

            <!-- Dark Mode -->
            <button onclick="toggleDark()"
                class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                🌙
            </button>

            <!-- Admin CTA -->
            <a href="/admin"
               class="ml-2 bg-blue-800 text-white px-5 py-2.5 rounded-full font-semibold hover:bg-blue-700 shadow hover:shadow-lg transition transform hover:-translate-y-0.5">
                <i class="fas fa-user-shield mr-2"></i>Admin
            </a>
        </div>

        <!-- MOBILE BUTTON -->
        <button onclick="toggleMenu()" class="md:hidden text-2xl">
            ☰
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-2 text-sm font-medium">
        <a href="{{ route('home') }}" class="block py-2 hover:text-blue-600">Home</a>
        <a href="{{ route('services') }}" class="block py-2 hover:text-blue-600">Services</a>
        <a href="{{ route('projects') }}" class="block py-2 hover:text-blue-600">Projects</a>
        <a href="{{ route('career') }}" class="block py-2 hover:text-blue-600">Career</a>
        <a href="{{ route('blogs') }}" class="block py-2 hover:text-blue-600">Blogs</a>
        <a href="{{ route('about') }}" class="block py-2 hover:text-blue-600">About</a>
        <a href="{{ route('contact') }}" class="block py-2 hover:text-blue-600">Contact</a>
    </div>
</nav>

<!-- ================= MAIN ================= -->
<main class="min-h-screen">
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<footer class="bg-[#0b1120] text-gray-400 pt-20 pb-10">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- BRAND -->
            <div>
                <h2 class="text-2xl font-bold text-white mb-4">IntelliSoft</h2>
                <p class="text-sm leading-relaxed mb-6">
                    Delivering scalable and modern digital solutions tailored for businesses in Nepal.
                </p>

                <div class="flex gap-4 text-lg">
                    <i class="fab fa-facebook hover:text-blue-500 cursor-pointer"></i>
                    <i class="fab fa-linkedin hover:text-blue-400 cursor-pointer"></i>
                    <i class="fab fa-github hover:text-white cursor-pointer"></i>
                </div>
            </div>

            <!-- LINKS -->
            <div>
                <h4 class="text-white font-semibold mb-4">Company</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ route('career') }}" class="hover:text-white">Careers</a></li>
                    <li><a href="{{ route('blogs') }}" class="hover:text-white">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- SERVICES -->
            <div>
                <h4 class="text-white font-semibold mb-4">Services</h4>
                <ul class="space-y-3 text-sm">
                    <li>Web Development</li>
                    <li>Mobile Applications</li>
                    <li>Custom Software</li>
                    <li>Cloud Solutions</li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <p class="text-sm">Kathmandu, Nepal</p>
                <p class="text-sm">info@intellisoftnepal.com</p>
                <p class="text-white font-bold mt-2">+977-01-4790617</p>
            </div>

        </div>

        <!-- BOTTOM -->
        <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-sm gap-3">
            <p>© {{ date('Y') }} Intellisoft Nepal. All rights reserved.</p>
            <p class="text-gray-500">Built with ❤️ in Nepal</p>
        </div>

    </div>
</footer>

<!-- ================= JS ================= -->
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
