<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Team;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $featuredProjects = Project::where('featured', true)->latest()->take(6)->get();
        $teamMembers = Team::orderBy('sort_order')->get();
        $testimonials = Testimonial::where('is_visible', true)->latest()->get();


        return view('home', compact('services', 'featuredProjects', 'teamMembers', 'testimonials'));
    }

    public function about()
    {
        $teamMembers = Team::orderBy('sort_order')->get();
        return view('about', compact('teamMembers'));
    }
    public function services()
    {
        $services = \App\Models\Service::all();
        return view('services', compact('services'));
    }

    public function projects()
    {
        $featuredProjects = \App\Models\Project::all();
        return view('projects', compact('featuredProjects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
