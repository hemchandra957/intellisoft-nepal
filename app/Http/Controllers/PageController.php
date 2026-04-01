<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Team;
Use App\Models\Post;
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


        $latestPosts = Post::where('is_published', true)->latest('published_at')->take(3)->get();

        return view('home', compact('services', 'featuredProjects', 'teamMembers', 'testimonials', 'latestPosts'));
    }

    public function about()
    {
        $teamMembers = Team::orderBy('sort_order')->get();
        return view('about', compact('teamMembers'));
    }
    public function services()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function projects()
    {
        $featuredProjects = Project::all();
        return view('projects', compact('featuredProjects'));
    }

    public function blogs()
    {
        $posts = Post::where('is_published', true)
                    ->orderBy('published_at', 'desc')
                    ->paginate(9);

        return view('blogs', compact('posts'));
    }

    public function blogDetail($slug)
    {
        $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('blog-details', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }
}
