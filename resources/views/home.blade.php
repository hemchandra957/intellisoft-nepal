@extends('layouts.frontend')

@section('content')
    <header class="bg-gradient-to-r from-blue-900 to-indigo-800 text-white py-32 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Welcome to Intellisoft Nepal</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto">Building Digital Excellence with Modern Technology and Expert Solutions.</p>
            <div class="mt-10">
                <a href="{{ route('contact') }}" class="bg-white text-blue-900 px-8 py-3 rounded-full font-bold hover:bg-blue-50 transition">Get Started</a>
            </div>
        </div>
    </header>

    <section id="services" class="container mx-auto px-6 py-24 border-b border-gray-100">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
            <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($services as $service)
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300 group">
                <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 transition">
                    <i class="fas fa-laptop-code text-blue-600 group-hover:text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-blue-900">{{ $service->title }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $service->short_description }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="projects" class="bg-gray-50 py-24">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                <div class="group rounded-2xl overflow-hidden shadow-md bg-white border border-gray-100">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="{{ $project->title }}">
                    </div>
                    <div class="p-8">
                        <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $project->title }}</h3>
                        <p class="text-blue-600 text-sm font-semibold mb-4">{{ $project->client_name }}</p>
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="inline-block text-gray-900 font-bold border-b-2 border-blue-600 hover:text-blue-600 transition">View Project →</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Expert Team Behind Success</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">Our dedicated professionals work tirelessly to transform your ideas into reality. We believe in quality, innovation, and long-term partnerships.</p>
                <a href="{{ route('about') }}" class="text-blue-700 font-bold hover:underline">Learn more about our team →</a>
            </div>
            <div class="md:w-1/2 grid grid-cols-2 gap-4">
                @foreach($teamMembers->take(4) as $member)
                    <div class="text-center p-4">
                        <img src="{{ asset('storage/' . $member->photo) }}" class="w-20 h-20 rounded-full mx-auto mb-2 object-cover grayscale hover:grayscale-0 transition duration-300">
                        <h4 class="font-bold text-sm">{{ $member->name }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="testimonials" class="bg-blue-900 text-white py-24">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">What Our Clients Say</h2>
                <div class="w-16 h-1 bg-blue-400 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($testimonials as $testimonial)
                <div class="bg-blue-800/50 p-10 rounded-3xl border border-blue-700 hover:bg-blue-800 transition">
                    <p class="text-blue-100 text-lg italic mb-8">"{{ $testimonial->content }}"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center font-bold text-white uppercase">
                            {{ substr($testimonial->client_name, 0, 1) }}
                        </div>
                        <div>
                            <h5 class="font-bold text-lg">{{ $testimonial->client_name }}</h5>
                            <p class="text-blue-300 text-sm">{{ $testimonial->company }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-6">Ready to start your project?</h2>
            <a href="{{ route('contact') }}" class="bg-blue-900 text-white px-10 py-4 rounded-full font-bold hover:bg-blue-800 transition shadow-lg">Contact Us Now</a>
        </div>
    </section>
@endsection
