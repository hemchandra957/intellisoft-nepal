@extends('layouts.frontend')

@section('content')

<!-- ✅ HERO (Same style as Contact) -->
<section class="relative bg-gradient-to-br from-blue-900 via-[#0b1120] to-black py-32 text-white overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-blue-500/20 blur-3xl rounded-full"></div>

    <div class="container mx-auto px-6 text-center relative z-10">

        <span class="inline-block mb-6 px-4 py-1.5 bg-white/10 text-blue-300 text-sm rounded-full border border-white/20">
            💼 Career Opportunity
        </span>

        <h1 class="text-4xl md:text-6xl font-extrabold mb-6">
            Start Your Career <span class="text-blue-400">With Us</span>
        </h1>

        <p class="text-blue-100 text-lg max-w-xl mx-auto">
            Join Intellisoft Nepal and gain real-world experience through our internship program.
        </p>

    </div>
</section>

<!-- ✅ JOB + DETAILS -->
<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">

        <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16">

            <!-- LEFT INFO -->
            <div class="space-y-10">

                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Internship Program 2026
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Work on real projects using modern technologies like Laravel, React, Flutter, and UI/UX Design.
                    </p>
                </div>

                <!-- Info Cards -->
                <div class="space-y-6">

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            📍
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Location</h4>
                            <p class="text-sm text-gray-600">Kathmandu (Hybrid)</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            ⏰
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Job Type</h4>
                            <p class="text-sm text-gray-600">Full Time Internship</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white dark:bg-white/5 rounded-2xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            📅
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Deadline</h4>
                            <p class="text-sm text-gray-600">April 30, 2026</p>
                        </div>
                    </div>

                </div>

                <!-- Apply Button -->
                <button onclick="toggleForm()"
                    class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700 transition">
                    Apply Now
                </button>

            </div>

            <!-- RIGHT FORM -->
            <div id="applicationForm"
                 class="hidden bg-white/80 dark:bg-white/5 backdrop-blur-xl rounded-3xl shadow-2xl p-10 border">

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-xl">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">

                        <input type="text" name="full_name" placeholder="Full Name"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">

                        <input type="email" name="email" placeholder="Email Address"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">

                        <input type="text" name="phone" placeholder="Phone Number"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">

                        <select name="apply_for"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">
                            <option>Laravel</option>
                            <option>React</option>
                            <option>Flutter</option>
                            <option>UI/UX</option>
                        </select>

                        <input type="text" name="college" placeholder="College / University"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">

                        <input type="date" name="start_date"
                            class="w-full px-5 py-4 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-blue-500">

                    </div>

                    <div>
                        <label class="text-sm font-bold">Upload CV (PDF)</label>
                        <input type="file" name="cv"
                            class="w-full mt-2 border-dashed border-2 border-gray-200 p-3 rounded-xl">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-800 text-white py-4 rounded-xl font-bold hover:bg-blue-900 transition">
                        Submit Application →
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>

<!-- ✅ CTA (Same style) -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-center">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Build Your Future With Us 🚀
        </h2>

        <p class="mb-6 text-blue-100">
            Take the first step towards your tech career today.
        </p>

        <button onclick="toggleForm()"
            class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:shadow-lg transition">
            Apply Now
        </button>

    </div>
</section>

<script>
function toggleForm() {
    const form = document.getElementById('applicationForm');
    form.classList.toggle('hidden');

    if (!form.classList.contains('hidden')) {
        form.scrollIntoView({ behavior: 'smooth' });
    }
}
</script>

@endsection
