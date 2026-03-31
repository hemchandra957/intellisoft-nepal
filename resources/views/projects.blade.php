@extends('layouts.frontend')

@section('content')
<section class="bg-blue-900 py-28 text-white">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Our Success Stories</h1>
        <p class="text-blue-100 max-w-2xl mx-auto text-lg">हामीले विभिन्न क्षेत्रका क्लाइन्टहरूका लागि निर्माण गरेका केही प्रतिनिधि प्रोजेक्टहरू।</p>
    </div>
</section>

<section class="py-24">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="group relative overflow-hidden rounded-3xl bg-gray-900 aspect-[4/5]">
                <img src="{{ asset('storage/' . $project->image) }}"
                     class="w-full h-full object-cover opacity-80 group-hover:opacity-40 group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 p-8 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 transition duration-500">
                    <span class="text-blue-400 font-bold text-sm mb-2 opacity-0 group-hover:opacity-100 transition delay-100">Featured Case Study</span>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $project->title }}</h3>
                    <p class="text-gray-300 text-sm mb-6 opacity-0 group-hover:opacity-100 transition delay-200">
                        {{ $project->client_name }} - Excellence in Digital Transformation.
                    </p>
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank"
                           class="w-fit bg-white text-gray-900 px-6 py-2 rounded-full font-bold text-sm opacity-0 group-hover:opacity-100 transition delay-300 hover:bg-blue-600 hover:text-white">
                           View Live Project
                        </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
