@extends('layouts.frontend')

@section('content')
    <header class="bg-gradient-to-r from-blue-900 to-indigo-800 text-white py-32 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Welcome to Intellisoft Nepal</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto">Building Digital Excellence with Modern Technology and Expert Solutions.</p>
        </div>
    </header>

    <section id="services" class="container mx-auto px-6 py-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
            <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($services as $service)
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-bold mb-4 text-blue-900">{{ $service->title }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $service->short_description }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="projects" class="bg-white py-24">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                <div class="group rounded-2xl overflow-hidden shadow-md bg-white border border-gray-100">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
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

    <section id="testimonials" class="bg-blue-50 py-24">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($testimonials as $testimonial)
                <div class="bg-white p-10 rounded-3xl shadow-sm border-b-8 border-blue-600">
                    <p class="text-gray-600 text-lg italic mb-8 leading-relaxed">"{{ $testimonial->content }}"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center font-bold text-blue-700">
                            {{ substr($testimonial->client_name, 0, 1) }}
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-900 text-lg">{{ $testimonial->client_name }}</h5>
                            <p class="text-gray-500 text-sm">{{ $testimonial->company }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
