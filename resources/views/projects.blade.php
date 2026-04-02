@extends('layouts.frontend')

@section('content')

<!-- ✅ HERO -->
<section class="relative bg-gradient-to-br from-blue-900 via-[#0b1120] to-black py-32 text-white overflow-hidden">

    <!-- Glow Effects -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-purple-500/10 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <!-- Badge -->
        <span class="inline-block mb-6 px-4 py-1.5 bg-white/10 text-blue-300 text-sm rounded-full border border-white/20">
            💼 Our Portfolio
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Our Success Stories <br>
            <span class="text-blue-400">That Speak Results</span>
        </h1>

        <p class="text-blue-100 max-w-2xl mx-auto text-lg leading-relaxed">
            हामीले विभिन्न क्षेत्रका क्लाइन्टहरूका लागि निर्माण गरेका केही प्रतिनिधि प्रोजेक्टहरू।
        </p>

    </div>
</section>

<!-- ✅ PROJECTS -->
<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                Featured Projects
            </h2>
            <p class="text-gray-500 max-w-xl mx-auto">
                A glimpse of our impactful digital transformations.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach($featuredProjects as $project)
            <div class="group relative overflow-hidden rounded-3xl bg-black aspect-[4/5] shadow-lg hover:shadow-2xl transition duration-500">

                <!-- Image -->
                <img src="{{ asset('storage/' . $project->image) }}"
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110 group-hover:brightness-50">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-90"></div>

                <!-- Content -->
                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-6 group-hover:translate-y-0 transition duration-500">

                    <!-- Tag -->
                    <span class="text-blue-400 font-semibold text-xs mb-2 tracking-wide opacity-0 group-hover:opacity-100 transition delay-100">
                        🚀 Case Study
                    </span>

                    <!-- Title -->
                    <h3 class="text-2xl font-bold text-white mb-3">
                        {{ $project->title }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-300 text-sm mb-5 opacity-0 group-hover:opacity-100 transition delay-200">
                        {{ $project->client_name }} – Delivering excellence in digital innovation.
                    </p>

                    <!-- Button -->
                    @if($project->link)
                    <a href="{{ $project->link }}" target="_blank"
                       class="w-fit bg-white text-gray-900 px-5 py-2 rounded-full text-sm font-semibold opacity-0 group-hover:opacity-100 transition delay-300 hover:bg-blue-600 hover:text-white">
                        View Project →
                    </a>
                    @endif

                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- ✅ CTA -->
<section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center relative overflow-hidden">

    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

    <div class="container mx-auto px-6 relative z-10">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Have a Project in Mind?
        </h2>

        <p class="text-lg text-blue-100 mb-8 max-w-xl mx-auto">
            Let’s collaborate and turn your vision into reality.
        </p>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all">
            Start Your Project
        </a>

    </div>
</section>

@endsection
