<?php

namespace App\Http\Controllers;

use App\Location;
use App\Job;
use App\Category;

class LocationController extends Controller
{
    public function show(Location $location)
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->whereHas('location', function($query) use($location) {
                $query->whereId($location->id);
            })
            ->paginate(7);
        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Location: '.$location->name;

        return view('jobs.index', compact(['jobs', 'banner', 'searchCategories', 'searchLocations', 'sidbarJobs']));
    }
}
