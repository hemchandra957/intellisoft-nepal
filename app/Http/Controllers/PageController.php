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
}
