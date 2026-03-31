@extends('layouts.frontend')

@section('content')
    <section class="relative bg-gradient-to-r from-blue-900 to-indigo-800 py-32 text-white overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6">
                    Innovating the Future of <span class="text-blue-400">IT in Nepal</span>
                </h1>
                <p class="text-xl text-blue-100 mb-10 leading-relaxed">
                    Intellisoft Nepal provides world-class software development, web solutions, and digital transformation for modern businesses.
                </p>
                <div class="flex gap-4">
                    <a href="#services" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-full font-bold transition-all transform hover:scale-105 shadow-lg">Our Expertise</a>
                    <a href="#projects" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white px-8 py-4 rounded-full font-bold border border-white/30 transition-all">View Work</a>
                </div>
            </div>
        </div>
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 rounded-full blur-3xl"></div>
    </section>

    <section id="services" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Solutions We Provide</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="group bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fas fa-{{ $service->icon ?? 'laptop-code' }} text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $service->short_description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="projects" class="py-24">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Featured Portfolio</h2>
                    <p class="text-gray-500 mt-2">Delivering excellence across industries.</p>
                </div>
                <a href="#" class="text-blue-600 font-bold hover:underline">View All Projects →</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent flex flex-col justify-end p-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-white text-2xl font-bold">{{ $project->title }}</h3>
                            <p class="text-blue-300 text-sm mb-4">{{ $project->client_name }}</p>
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="text-white flex items-center gap-2 text-sm font-semibold border border-white/50 w-fit px-4 py-2 rounded-md hover:bg-white hover:text-black transition">
                                    Live Preview <i class="fas fa-external-link-alt text-xs"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="team" class="py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-16">The Minds Behind Intellisoft</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                @foreach($teamMembers as $member)
                    <div class="group">
                        <div class="relative w-48 h-48 mx-auto mb-6">
                            <img src="{{ asset('storage/' . $member->photo) }}" class="w-full h-full object-cover rounded-full border-4 border-gray-700 group-hover:border-blue-500 transition-colors">
                        </div>
                        <h4 class="text-xl font-bold">{{ $member->name }}</h4>
                        <p class="text-blue-400 text-sm mb-4">{{ $member->designation }}</p>
                        <div class="flex justify-center gap-4 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ $member->linkedin_url }}" class="hover:text-blue-400"><i class="fab fa-linkedin text-xl"></i></a>
                            <a href="{{ $member->twitter_url }}" class="hover:text-blue-300"><i class="fab fa-twitter text-xl"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 italic text-gray-800">"What our clients say about us"</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white p-8 rounded-3xl shadow-sm border-b-4 border-blue-600">
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            {{ $testimonial->content }}
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center font-bold text-blue-600">
                                {{ substr($testimonial->client_name, 0, 1) }}
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-900">{{ $testimonial->client_name }}</h5>
                                <p class="text-gray-500 text-sm">{{ $testimonial->company }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
