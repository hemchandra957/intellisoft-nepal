<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $openings = [
            [
                'id' => 1,
                'title' => 'Internship Program 2026',
                'type' => 'Full Time',
                'location' => 'Kathmandu (Hybrid)',
                'deadline' => 'April 30, 2026',
                'description' => 'We are looking for passionate interns for Laravel, React, and Flutter tracks.'
            ],
        ];

        return view('career', compact('openings'));
    }

    public function store(Request $request)
    {
        // १. कडा भ्यालिडेसन (नयाँ फिल्डहरू सहित)
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'province' => 'required',
            'district' => 'required',
            'palika' => 'required',
            'college' => 'required',
            'faculty' => 'required',
            'semester' => 'required',
            'apply_for' => 'required',
            'start_date' => 'required|date|after_or_equal:today',
            'cv' => 'required|mimes:pdf|max:5120', // Max 5MB PDF
            'photo' => 'nullable|image|max:2048',
            'letter' => 'nullable|mimes:pdf,doc,docx|max:5120',
        ]);

        $data = $request->all();

        // २. फाइल अपलोड गर्ने र सुरक्षित राख्ने
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('interns/photos', 'public');
        }

        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('interns/cvs', 'public');
        }

        if ($request->hasFile('letter')) {
            $data['letter'] = $request->file('letter')->store('interns/letters', 'public');
        }

        // ३. डेटाबेस मा सेभ गर्ने
        Internship::create($data);

        // ४. सफल म्यासेजसहित फर्किने
        return back()->with('success', 'Thank you! Your application has been submitted successfully.');
    }
}
