@extends('layouts.frontend')

@section('content')


<section class="relative bg-gradient-to-br from-blue-900 via-[#0b1120] to-black text-white py-36 overflow-hidden">


    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <span class="inline-block mb-6 px-4 py-1.5 bg-white/10 text-blue-300 text-sm rounded-full border border-white/20">
            🚀 Welcome to Intellisoft Nepal
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Building Digital Excellence <br>
            <span class="text-blue-400">With Modern Technology</span>
        </h1>

        <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-10">
            Transforming ideas into powerful digital solutions with innovation, creativity, and expertise.
        </p>

        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}"
               class="bg-white text-blue-900 px-8 py-3 rounded-full font-bold hover:bg-blue-50 transition shadow-lg">
                Get Started
            </a>

            <a href="{{ route('projects') }}"
               class="border border-white/30 px-8 py-3 rounded-full hover:bg-white/10 transition">
                View Projects
            </a>
        </div>


        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-3xl font-bold">100+</h3>
                <p class="text-blue-200 text-sm">Projects</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">50+</h3>
                <p class="text-blue-200 text-sm">Clients</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">10+</h3>
                <p class="text-blue-200 text-sm">Years</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">24/7</h3>
                <p class="text-blue-200 text-sm">Support</p>
            </div>
        </div>

    </div>
</section>


<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                Our Services
            </h2>
            <p class="text-gray-500 max-w-xl mx-auto">
                Powerful solutions designed for modern businesses.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            @foreach($services as $service)
            <div class="group bg-white/70 dark:bg-white/5 backdrop-blur-xl p-10 rounded-3xl border hover:shadow-2xl hover:-translate-y-3 transition duration-500">

                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition">
                    <i class="fas fa-laptop-code text-blue-600 group-hover:text-white text-xl"></i>
                </div>

                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">
                    {{ $service->title }}
                </h3>

                <p class="text-gray-600 dark:text-gray-400">
                    {{ $service->short_description }}
                </p>

            </div>
            @endforeach

        </div>
    </div>
</section>


<section class="py-24">
    <div class="container mx-auto px-6">

        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Featured Projects</h2>
            <a href="{{ route('projects') }}" class="text-blue-600 font-semibold hover:underline">
                View All →
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($featuredProjects as $project)
            <div class="group rounded-3xl overflow-hidden bg-black shadow-lg">

                <img src="{{ asset('storage/' . $project->image) }}"
                     class="h-56 w-full object-cover group-hover:scale-110 transition duration-500">

                <div class="p-6 bg-white">
                    <h3 class="font-bold text-lg mb-2">{{ $project->title }}</h3>
                    <p class="text-blue-600 text-sm mb-4">{{ $project->client_name }}</p>

                    @if($project->link)
                    <a href="{{ $project->link }}" target="_blank"
                       class="text-sm font-semibold text-gray-800 hover:text-blue-600">
                        View Project →
                    </a>
                    @endif
                </div>

            </div>
            @endforeach

        </div>

    </div>
</section>


<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold mb-12">Meet Our Team</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($teamMembers->take(4) as $member)
            <div>
                <img src="{{ asset('storage/' . $member->photo) }}"
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover shadow-lg hover:scale-110 transition">

                <h4 class="font-bold">{{ $member->name }}</h4>
            </div>
            @endforeach
        </div>

    </div>
</section>


<section class="py-24 bg-blue-900 text-white">
    <div class="container mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold mb-12">What Clients Say</h2>

        <div class="grid md:grid-cols-2 gap-10">

            @foreach($testimonials as $testimonial)
            <div class="bg-blue-800/50 p-8 rounded-3xl border border-blue-700 hover:bg-blue-800 transition">

                <p class="italic text-blue-100 mb-6">
                    "{{ $testimonial->content }}"
                </p>

                <h5 class="font-bold">{{ $testimonial->client_name }}</h5>
                <p class="text-blue-300 text-sm">{{ $testimonial->company }}</p>

            </div>
            @endforeach

        </div>

    </div>
</section>


<section class="py-24 text-center bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Ready to start your project?
        </h2>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-10 py-4 rounded-full font-bold shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
            Contact Us Now
        </a>

    </div>
</section>

@endsection
