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
            ->paginate(0);

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $sidbarJobs = Job::whereTopRated(true)
        ->orderBy('id', 'desc')
        ->get();

        $banner = 'Jobs';

        return view('jobs.index', compact(['jobs', 'banner', 'searchLocations', 'searchCategories', 'sidbarJobs']));
    }

    public function show(Job $job)
    {
        $job->load('company');
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');

        return view('jobs.show', compact(['job', 'searchLocations', 'searchCategories']));
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
        ->take(0)
        ->get();

        $sidebarLocations = Location::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get();

        $sidebarCategories= Category::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get();

        return view('jobs.pasang', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidebarJobs','sidebarLocations','sidebarCategories']));
    }

    public function pasang2()
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

        return view('jobs.pasang2', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidebarJobs','sidebarLocations','sidebarCategories']));
    }

}
