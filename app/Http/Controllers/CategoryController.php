<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Riwayat;
use App\Wish;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // dd($slug);
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress]])->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $category         = Category::where('slug', $slug)->first();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs             = Job::with('company')
            ->whereHas('categories', static function ($query) use ($category) {
                $query->whereId($category->id);
            })
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Category: ' . $category->name;
        $title = 'Kategori Pekerjaan' . ' ' . $category->name;

        return view('jobs.index', compact(['title','wishh', 'riwayatlist', 'ipaddress', 'wishlist', 'jobs', 'banner', 'searchLocations', 'searchCategories', 'sidbarJobs']));
    }
}
