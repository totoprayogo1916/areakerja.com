<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;

class JobController extends Controller
{
    public function index()
    {

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->paginate(7);

        $banner = 'Jobs';

        return view('jobs.index', compact(['jobs', 'banner','searchLocations','searchCategories']));
    }

    public function show(Job $job)
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $job->load('company');

        return view('jobs.show', compact(['job','searchLocations','searchCategories']));
    }
}
