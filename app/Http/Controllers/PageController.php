<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Team;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Database बाट सक्रिय भएका Services तान्ने
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();

        // Featured भएका पछिल्ला ६ वटा Projects तान्ने
        $featuredProjects = Project::where('featured', true)->latest()->take(6)->get();

        // Team members तान्ने
        $teamMembers = Team::orderBy('sort_order')->get();

        // View मा डेटा पठाउने
        return view('home', compact('services', 'featuredProjects', 'teamMembers'));
    }
}
