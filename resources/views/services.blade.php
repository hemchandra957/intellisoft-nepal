@extends('layouts.frontend')

@section('content')
<section class="bg-[#0b1120] py-28 text-white relative overflow-hidden">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Innovative IT Services</h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg">हामी अत्याधुनिक प्रविधिको प्रयोग गरेर तपाईँको व्यवसायलाई डिजिटल युगमा अगाडि बढाउन मद्दत गर्छौँ।</p>
    </div>
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl"></div>
</section>

<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($services as $service)
            <div class="group bg-white p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-8 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-500">
                    <i class="fas fa-laptop-code text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $service->title }}</h3>
                <p class="text-gray-600 leading-relaxed mb-8">{{ $service->short_description }}</p>
                <a href="{{ route('contact') }}" class="text-blue-600 font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
                    Get Started <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
