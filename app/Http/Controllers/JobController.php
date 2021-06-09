<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')
            ->paginate(7);

        $banner = 'Jobs';

        return view('jobs.index', compact(['jobs', 'banner']));
    }

    public function show(Job $job)
    {
        $job->load('company');

        return view('jobs.show', compact('job'));
    }

    public function pasang()
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
        $sidebarJobs = Job::whereTopRated(true)
        ->orderBy('id', 'desc')
        ->take(5)
        ->get();
        
        $sidebarLocations = Location::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get();
        
        $sidebarCategories= Category::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get();

        return view('jobs.pasang', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidebarJobs','sidebarLocations','sidebarCategories']));
    }

}
