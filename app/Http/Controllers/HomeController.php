<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidbarJobs = Job::whereTopRated(true)
        ->orderBy('id', 'desc')
        ->take(5)
        ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidbarJobs']));
    }

    public function search(Request $request)
    {

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner', 'searchLocations', 'searchCategories']));
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function kontak()
    {
        return view('user.kontak');
    }
}
