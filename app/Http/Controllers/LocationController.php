<?php

namespace App\Http\Controllers;

use App\Location;
use App\Job;
use App\Category;
use App\Wish;

class LocationController extends Controller
{
    public function show(Location $location)
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        $wishlist=Wish::where('ip', $ipaddress)->get();

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

        return view('jobs.index', compact(['ipaddress','wishlist','jobs', 'banner', 'searchCategories', 'searchLocations', 'sidbarJobs']));
    }
}
