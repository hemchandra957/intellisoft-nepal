@extends('layouts.frontend')

@section('content')
<section class="bg-blue-900 py-32 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-400 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-500 rounded-full filter blur-3xl translate-x-1/2 translate-y-1/2"></div>
    </div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <span class="uppercase tracking-widest text-blue-300 font-bold text-sm">Empowering Businesses</span>
        <h1 class="text-4xl md:text-6xl font-extrabold mt-4 mb-6">About IntelliSoft Nepal</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">
            We are a team of dedicated professionals committed to taking your business to new heights through technology.
        </p>
    </div>
</section>

<section class="relative -mt-16 z-20">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-xl grid grid-cols-2 md:grid-cols-4 p-8 md:p-12 gap-8 text-center border border-gray-100">
            <div>
                <h3 class="text-4xl font-extrabold text-blue-800">5+</h3>
                <p class="text-gray-500 font-semibold mt-1">Years Exp.</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-blue-800">100+</h3>
                <p class="text-gray-500 font-semibold mt-1">Projects Done</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-blue-800">50+</h3>
                <p class="text-gray-500 font-semibold mt-1">Happy Clients</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-blue-800">15+</h3>
                <p class="text-gray-500 font-semibold mt-1">Expert Team</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 container mx-auto px-6">
    <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2 relative">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000" class="rounded-3xl shadow-2xl relative z-10">
            <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-blue-600 rounded-3xl -z-0"></div>
        </div>
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Innovative Solutions for Modern Problems</h2>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                Intellisoft Nepal Pvt. Ltd. is a full-service IT company. Our primary goal is to empower businesses of all sizes through digital transformation. We don't just write code; we give digital life to your dreams.
            </p>
            <div class="space-y-4">
                <div class="flex items-center gap-4 bg-gray-50 p-4 rounded-xl hover:bg-blue-50 transition">
                    <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                    <span class="font-bold text-gray-800">Custom Software Development</span>
                </div>
                <div class="flex items-center gap-4 bg-gray-50 p-4 rounded-xl hover:bg-blue-50 transition">
                    <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                    <span class="font-bold text-gray-800">Mobile App & Web Solutions</span>
                </div>
                <div class="flex items-center gap-4 bg-gray-50 p-4 rounded-xl hover:bg-blue-50 transition">
                    <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                    <span class="font-bold text-gray-800">IT Consulting & Digital Strategy</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Meet Our Experts</h2>
        <p class="text-gray-500 mb-20 max-w-xl mx-auto">Success is a collective effort of our talented minds and technical excellence.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($teamMembers as $member)
            <div class="group relative bg-white rounded-3xl p-4 shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100">

                <div class="relative overflow-hidden rounded-2xl h-80 mb-6">
                    <img src="{{ asset('storage/' . $member->photo) }}"
                         class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-blue-900/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center gap-4">
                        <a href="#" class="w-10 h-10 bg-white/20 hover:bg-white text-white hover:text-blue-600 rounded-full flex items-center justify-center backdrop-blur-md transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 hover:bg-white text-white hover:text-blue-400 rounded-full flex items-center justify-center backdrop-blur-md transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <div class="text-left px-2 pb-2">
                    <h4 class="text-xl font-bold text-gray-900 group-hover:text-blue-700 transition-colors">{{ $member->name }}</h4>
                    <p class="text-blue-600 font-semibold text-sm mb-4">{{ $member->designation }}</p>

                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-100 opacity-0 transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                        {{-- Static examples - Replace with $member->skills if available in your DB --}}
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-[10px] font-bold rounded-full uppercase">Innovation</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-[10px] font-bold rounded-full uppercase">Solutions</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-[10px] font-bold rounded-full uppercase">Quality</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
