<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellisoft Nepal | IT Solutions</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        .nav-link-active {
            background-color: #eff6ff; /* blue-50 */
            color: #1e40af; /* blue-800 */
            border-radius: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-50 text-slate-900">

    <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-800 tracking-tight flex items-center gap-2 group">
                <div class="bg-blue-800 text-white p-1.5 rounded group-hover:rotate-12 transition-transform">
                    <i class="fas fa-code-branch"></i>
                </div>
                <span>IntelliSoft</span>
            </a>

            <div class="hidden md:flex items-center space-x-1 text-sm font-bold">
                <a href="{{ route('home') }}"
                   class="px-4 py-2 transition duration-300 {{ request()->routeIs('home') && !str_contains(url()->current(), '#') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                   Home
                </a>

                <a href="{{ route('services') }}"
                    class="px-4 py-2 transition duration-300 {{ request()->routeIs('services') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                     Services
                </a>

                <a href="{{ route('projects') }}"
                   class="px-4 py-2 transition duration-300 {{ request()->routeIs('projects') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                   Projects
                </a>

                <a href="{{ route('blogs') }}"
                    class="px-4 py-2 transition duration-300 {{ request()->routeIs('blogs*') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                    Blogs
                </a>

                <a href="{{ route('about') }}"
                   class="px-4 py-2 transition duration-300 {{ request()->routeIs('about') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                   About Us
                </a>

                <a href="{{ route('contact') }}"
                   class="px-4 py-2 transition duration-300 {{ request()->routeIs('contact') ? 'nav-link-active' : 'text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg' }}">
                   Contact Us
                </a>

                <div class="h-6 w-px bg-gray-200 mx-2"></div>

                <a href="/admin" class="ml-2 bg-blue-800 text-white px-6 py-2.5 rounded-full hover:bg-blue-700 shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 active:scale-95">
                    <i class="fas fa-user-shield mr-2"></i>Admin Login
                </a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-[#0b1120] text-gray-400 pt-20 pb-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                            <i class="fas fa-code-branch text-xl"></i>
                        </div>
                        <span class="text-2xl font-extrabold text-white tracking-tight">IntelliSoft</span>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Established in 2013, we deliver high-end digital solutions, from responsive web design to complex software systems. Empowering Nepal's digital future.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-700 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                        Company
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-blue-600 rounded-full"></span>
                    </h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-500 hover:translate-x-2 transition-all duration-300 flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-500 hover:translate-x-2 transition-all duration-300 flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> About Us</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-500 hover:translate-x-2 transition-all duration-300 flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Our Services</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-blue-500 hover:translate-x-2 transition-all duration-300 flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Portfolio</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                        Business
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-blue-600 rounded-full"></span>
                    </h4>
                    <ul class="space-y-4 text-sm font-medium">
                        <li class="flex items-center gap-2 hover:text-blue-400 cursor-pointer"><i class="fas fa-check text-blue-600 text-[10px]"></i> Web Development</li>
                        <li class="flex items-center gap-2 hover:text-blue-400 cursor-pointer"><i class="fas fa-check text-blue-600 text-[10px]"></i> Mobile Apps</li>
                        <li class="flex items-center gap-2 hover:text-blue-400 cursor-pointer"><i class="fas fa-check text-blue-600 text-[10px]"></i> Custom Software</li>
                        <li class="flex items-center gap-2 hover:text-blue-400 cursor-pointer"><i class="fas fa-check text-blue-600 text-[10px]"></i> IT Consulting</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-8 relative inline-block">
                        Get In Touch
                        <span class="absolute -bottom-2 left-0 w-8 h-1 bg-blue-600 rounded-full"></span>
                    </h4>
                    <ul class="space-y-5 text-sm">
                        <li class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1"></i>
                            <span class="leading-relaxed">Shram Marg, Buddhanagar,<br>Kathmandu, Nepal</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fas fa-envelope text-blue-500"></i>
                            <a href="mailto:info@intellisoftnepal.com" class="hover:text-white transition">info@intellisoftnepal.com</a>
                        </li>
                        <li class="flex items-center gap-4 text-white font-bold text-base">
                            <i class="fas fa-phone-alt text-blue-500"></i>
                            <span>+977-01-4790617</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-10 text-center">
                <p class="text-xs uppercase tracking-widest text-gray-500">
                    &copy; {{ date('Y') }} <span class="text-white font-bold">Intellisoft Nepal Pvt. Ltd.</span> | All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
