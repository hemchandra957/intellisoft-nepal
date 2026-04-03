@extends('layouts.frontend')

@section('content')


<section class="relative bg-gradient-to-br from-[#0b1120] via-[#0f172a] to-[#0b1120] py-32 text-white overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-600/20 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-purple-600/10 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <span class="inline-block mb-6 px-4 py-1.5 bg-blue-600/20 text-blue-400 text-sm rounded-full border border-blue-500/20">
            💡 About Us
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Building Digital Products <br>
            <span class="text-blue-500">That Scale & Perform</span>
        </h1>

        <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
            We help businesses transform digitally with modern, scalable, and efficient technology solutions.
        </p>

    </div>
</section>


<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">


            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" class="rounded-3xl shadow-2xl">
                <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-blue-600 rounded-3xl"></div>
            </div>

            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-6">
                    We Create Impactful Digital Solutions
                </h2>

                <p class="text-gray-600 dark:text-gray-400 text-lg mb-8 leading-relaxed">
                    Intellisoft Nepal Pvt. Ltd. delivers high-quality IT services focusing on performance, scalability, and user experience. We build systems that grow with your business.
                </p>

                <div class="space-y-4">
                    @foreach([
                        'Custom Software Development',
                        'Web & Mobile App Development',
                        'IT Consulting & Strategy'
                    ] as $item)

                    <div class="flex items-center gap-4 bg-white/70 dark:bg-white/5 backdrop-blur-xl p-4 rounded-xl border border-gray-100 dark:border-gray-800 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition">
                        <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                            ✓
                        </div>
                        <span class="font-semibold text-gray-800 dark:text-white">{{ $item }}</span>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
            Meet Our Team
        </h2>

        <p class="text-gray-500 max-w-xl mx-auto mb-16">
            Our success is driven by talented professionals.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            @forelse($teamMembers ?? [] as $member)
            <div class="group relative bg-white/70 dark:bg-white/5 backdrop-blur-xl rounded-3xl border border-gray-100 dark:border-gray-800 overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-3 transition-all duration-500">

                <div class="relative h-80 overflow-hidden">
                    <img src="{{ asset('storage/' . $member->photo) }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition flex items-end p-6">
                        <div>
                            <h4 class="text-white font-bold text-lg">{{ $member->name }}</h4>
                            <p class="text-blue-300 text-sm">{{ $member->designation }}</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 text-left">
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">{{ $member->name }}</h4>
                    <p class="text-blue-600 text-sm mb-4">{{ $member->designation }}</p>
                </div>
            </div>
            @empty
            <p class="col-span-4 text-gray-500">No team members found.</p>
            @endforelse

        </div>
    </div>
</section>


<section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center relative overflow-hidden">

    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

    <div class="container mx-auto px-6 relative z-10">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Let’s Build Something Great Together
        </h2>

        <p class="text-lg text-blue-100 mb-8 max-w-xl mx-auto">
            We are ready to turn your ideas into reality.
        </p>

        <a href="{{ route('contact') }}"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all">
            Contact Us
        </a>

    </div>
</section>

@endsection
