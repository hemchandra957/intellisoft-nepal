@extends('layouts.frontend')

@section('content')
    <header class="bg-blue-900 text-white py-24 text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to Intellisoft Nepal</h1>
        <p class="text-xl text-blue-200">Building Digital Excellence with Modern Technology</p>
    </header>

    <section id="services" class="container mx-A px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition">
                <h3 class="text-xl font-bold mb-3 text-blue-800">{{ $service->title }}</h3>
                <p class="text-gray-600">{{ $service->short_description }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section class="bg-blue-50 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">What Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-white p-8 rounded-2xl shadow-sm italic text-gray-700 border-l-4 border-blue-600">
                    <p class="mb-4">"{{ $testimonial->content }}"</p>
                    <div class="font-bold text-blue-900">— {{ $testimonial->client_name }} ({{ $testimonial->company }})</div>
                    <div class="text-yellow-500 mt-1">
                        @for($i=0; $i < ($testimonial->rating ?? 5); $i++) ★ @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
