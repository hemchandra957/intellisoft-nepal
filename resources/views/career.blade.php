@extends('layouts.frontend')

@section('content')


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
            Join Intellisoft Nepal and gain real-world experience through structured internship programs and live projects.
        </p>
    </div>
</section>


<section class="py-24 bg-gray-50 dark:bg-[#0b1120]">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12">


            <div class="lg:col-span-7 space-y-12">
                @forelse($openings as $opening)
                    <div class="bg-white dark:bg-white/5 p-8 rounded-3xl shadow-sm border border-gray-200 dark:border-white/10">

                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                            {{ $opening->title }}
                        </h2>

                        <div class="text-gray-700 dark:text-gray-300 mb-8 prose max-w-none">
                            {!! $opening->description !!}
                        </div>


                        <div class="grid md:grid-cols-3 gap-4 mb-8">

                            <div class="p-4 bg-blue-50 rounded-2xl text-center">
                                <p class="text-xs font-bold text-blue-600 uppercase">Location</p>
                                <p class="font-semibold text-gray-900">{{ $opening->location ?? 'Kathmandu' }}</p>
                            </div>

                            <div class="p-4 bg-purple-50 rounded-2xl text-center">
                                <p class="text-xs font-bold text-purple-600 uppercase">Employment Type</p>
                                <p class="font-semibold text-gray-900">{{ $opening->job_type ?? 'Full Time' }}</p>
                            </div>

                            <div class="p-4 bg-green-50 rounded-2xl text-center">
                                <p class="text-xs font-bold text-green-600 uppercase">Application Deadline</p>
                                <p class="font-semibold text-gray-900">
                                    {{ \Carbon\Carbon::parse($opening->deadline)->format('M d, Y') }}
                                </p>
                            </div>

                        </div>

                        <button onclick="toggleForm()"
                            class="bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-blue-700 transition">
                            Apply for this Position
                        </button>

                    </div>
                @empty
                    <div class="text-center py-20 bg-white rounded-3xl border border-dashed">
                        <p class="text-gray-500 text-lg">No openings available at the moment.</p>
                    </div>
                @endforelse
            </div>


            <div class="lg:col-span-5">
                <div id="applicationForm" class="hidden lg:block sticky top-10 bg-white rounded-3xl shadow-2xl p-8 border">

                    <h3 class="text-2xl font-bold mb-6 text-gray-900">
                        Internship Application
                    </h3>

                    <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf


                        <div>
                            <label class="text-sm font-semibold text-gray-700">Full Name</label>
                            <input type="text" name="full_name" required
                                placeholder="Enter your full name"
                                class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500">
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-semibold text-gray-700">Email Address</label>
                                <input type="email" name="email" required
                                    placeholder="you@example.com"
                                    class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-gray-700">Phone Number</label>
                                <input type="text" name="phone" required
                                    placeholder="98XXXXXXXX"
                                    class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-semibold text-gray-700">Gender</label>
                                <select name="gender" required
                                    class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-gray-700">Applying For</label>
                                <select name="apply_for" required
                                    class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500">
                                    <option value="">Select position</option>
                                    @foreach($openings as $opening)
                                        <option value="{{ $opening->title }}">{{ $opening->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div>
                            <label class="text-sm font-semibold text-gray-700">Address</label>
                            <div class="grid grid-cols-3 gap-2 mt-1">
                                <input type="text" name="province" placeholder="Province"
                                    class="px-3 py-2 border rounded-lg">
                                <input type="text" name="district" placeholder="District"
                                    class="px-3 py-2 border rounded-lg">
                                <input type="text" name="palika" placeholder="City / Municipality"
                                    class="px-3 py-2 border rounded-lg">
                            </div>
                        </div>


                        <div>
                            <label class="text-sm font-semibold text-gray-700">Education</label>
                            <input type="text" name="college" required
                                placeholder="College / University Name"
                                class="w-full mt-1 px-4 py-3 border rounded-xl">

                            <div class="grid grid-cols-2 gap-4 mt-2">
                                <input type="text" name="faculty" placeholder="Faculty (e.g. BCA)"
                                    class="px-4 py-3 border rounded-xl">
                                <input type="text" name="semester" placeholder="Current Semester"
                                    class="px-4 py-3 border rounded-xl">
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-semibold text-gray-700">Available From</label>
                                <input type="date" name="start_date"
                                    class="w-full mt-1 px-4 py-3 border rounded-xl">
                            </div>

                            <div>
                                <label class="text-sm font-semibold text-gray-700">Upload Resume (PDF)</label>
                                <input type="file" name="cv" required
                                    class="w-full mt-1 text-sm">
                            </div>
                        </div>


                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 transition">
                            Submit Application 🚀
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
function toggleForm() {
    const form = document.getElementById('applicationForm');
    form.classList.remove('hidden');
    form.scrollIntoView({ behavior: 'smooth' });
}
</script>

@endsection
