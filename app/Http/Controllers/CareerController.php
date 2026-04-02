<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        // Fetch active vacancies that haven't hit the deadline
        $openings = Vacancy::where('is_active', true)
                           ->where('deadline', '>=', now())
                           ->latest()
                           ->get();

        return view('career', compact('openings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required|numeric|digits:10',
            'gender'     => 'required|in:Male,Female,Other',
            'province'   => 'required|string',
            'district'   => 'required|string',
            'palika'     => 'required|string',
            'college'    => 'required|string',
            'apply_for'  => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
            'cv'         => 'required|mimes:pdf|max:5120',
            'photo'      => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        // File Upload Logic
        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('interns/cvs', 'public');
        }
        // if ($request->hasFile('photo')) {
        //     $data['photo'] = $request->file('photo')->store('interns/photos', 'public');
        // }

        // Set default status for Admin Panel
        $data['status'] = 'Pending';

        Internship::create($data);

        return back()->with('success', 'Your application has been submitted successfully!');
    }
}
