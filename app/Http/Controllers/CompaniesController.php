<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Job;
use App\Location;
use App\Riwayat;
use App\Wish;

class CompaniesController extends Controller
{
    public function index($slug)
    {
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

        $wishh = Wish::where([['ip', '=', $ipaddress]])->get();
        $job   = Company::where('slug', $slug)->get();
        $job3  = $job->pluck('id');
        $job4  = $job->pluck('name', 'gambar');
        // dd($job3);
        $job2 = Job::where('company_id', $job3)->get();
        // dd($job2);
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();

        return view('company.index', compact(
            'wishh',
            'job',
            'job2',
            'riwayatlist',
            'searchLocations',
            'searchCategories',
            'wishlist',
            'ipaddress'
        ));
    }
}
