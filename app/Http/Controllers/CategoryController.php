<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Wish;
use App\Riwayat;

class CategoryController extends Controller
{
    public function show(Category $category)
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
        $wishh=Wish::where([['ip', '=', $ipaddress]])->get();
        $riwayatlist=Riwayat::where('ip',$ipaddress)->get();
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->whereHas('categories', function($query) use($category) {
                $query->whereId($category->id);
            })
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Category: '.$category->name;

        return view('jobs.index', compact(['wishh','riwayatlist','ipaddress','wishlist','jobs', 'banner', 'searchLocations', 'searchCategories', 'sidbarJobs']));
    }
}
