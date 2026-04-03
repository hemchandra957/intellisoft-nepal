@extends('layouts.frontend')

@section('content')


<section class="relative bg-gradient-to-br from-[#0b1120] via-[#0f172a] to-[#0b1120] py-32 text-white overflow-hidden">


    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-600/20 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-purple-600/10 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">


        <span class="inline-block mb-6 px-4 py-1.5 bg-blue-600/20 text-blue-400 text-sm rounded-full border border-blue-500/20">
            🚀 Our Services
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Innovative IT Services <br>
            <span class="text-blue-500">For Your Growth</span>
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
            हामी अत्याधुनिक प्रविधिको प्रयोग गरेर तपाईँको व्यवसायलाई डिजिटल युगमा अगाडि बढाउन मद्दत गर्छौँ।
        </p>

    </div>
</section>

<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">


        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                What We Offer
            </h2>
            <p class="text-gray-500 max-w-xl mx-auto">
                High-quality digital solutions tailored for modern businesses.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach($services as $service)
            <div class="group relative bg-white/70 dark:bg-white/5 backdrop-blur-xl p-10 rounded-3xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 overflow-hidden">


                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-500/10 opacity-0 group-hover:opacity-100 transition duration-500 rounded-3xl"></div>


                <div class="relative z-10 w-16 h-16 bg-blue-50 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center text-blue-600 mb-8 group-hover:bg-blue-600 group-hover:text-white transition duration-500 shadow-md">
                    <i class="fas fa-laptop-code text-2xl"></i>
                </div>


                <h3 class="relative z-10 text-2xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ $service->title }}
                </h3>


                <p class="relative z-10 text-gray-600 dark:text-gray-400 leading-relaxed mb-8">
                    {{ $service->short_description }}
                </p>


                <a href="{{ route('contact') }}"
                   class="relative z-10 inline-flex items-center gap-2 text-blue-600 font-semibold group-hover:gap-4 transition-all">
                    Get Started
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>

            </div>
            @endforeach

        </div>

    </div>
</section>


<section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center relative overflow-hidden">

    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

    <div class="container mx-auto px-6 relative z-10">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Ready to Build Something Amazing?
        </h2>

        <p class="text-lg text-blue-100 mb-8 max-w-xl mx-auto">
            Let’s turn your ideas into powerful digital solutions.
        </p>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all">
            Contact Us
        </a>

    </div>
</section>

@endsection
