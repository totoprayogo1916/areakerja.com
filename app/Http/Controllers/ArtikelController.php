<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Job;
use App\Location;
use App\Riwayat;
use App\Wish;
use Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function artikel()
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
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $wishlist = Wish::where('ip', $ipaddress)->get();
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

        $article = Article::all();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        return view(
            'artikel.index',
            compact([
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'article',
                'wishlist',
                'riwayatlist',
            ])
        );
    }

    public function show($slug)
    {
        // dd($slug);
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
<<<<<<< HEAD
        $article1 = Article::all('judul')->first();
=======
<<<<<<< HEAD
        $article1=Article::all('judul')->first();
>>>>>>> b5c05891b4cd5da35ce8fd8222f298297bf57582
        // $a=[Str::slug($article1->judul)];
        $a = Str::slug($article1->judul);
        // dd($a);
        $art = Article::where($a, $slug)->first();

<<<<<<< HEAD
=======
=======

        $art = Article::where('slug', $slug)->first();
        // $tampilkan = Crud::where('slug_judul', $slug)->first();
        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

>>>>>>> 7f3b6d206ea2eb58a328aafbf8d93d02cd98684b
>>>>>>> b5c05891b4cd5da35ce8fd8222f298297bf57582
        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        return view(
            'artikel.show',
<<<<<<< HEAD
            compact([
=======
<<<<<<< HEAD
            with([
=======
            compact([
>>>>>>> 7f3b6d206ea2eb58a328aafbf8d93d02cd98684b
>>>>>>> b5c05891b4cd5da35ce8fd8222f298297bf57582
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'art',
            ])
        );
    }
}
