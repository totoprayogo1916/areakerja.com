<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Price;
use App\Riwayat;
use App\Wish;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class JobController extends Controller
{
    public function index()
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
        Carbon::setLocale('id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $jobs             = Job::with('company')->paginate(0);
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $wishh            = Wish::all();
        $sidbarJobs       = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Jobs';
        $title  = 'Lowongan Kerja di Yogyakarta';

        return view(
            'jobs.index',
            compact([
                'title',
                'jobs',
                'banner',
                'searchLocations',
                'searchCategories',
                'sidbarJobs', 'riwayatlist', 'wishlist', 'ipaddress', 'wishh',
            ])
        );
    }

    public function show($slug)
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

        $job = Job::where('slug', $slug)->first();
        $job->load('company');
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress], ['idJob', '=', $job->id]])->get();

        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();

        $title = 'Lowongan Kerja ' . $job->title . ' di ' . $job->company->name;
        // Alert::success('Sukses Membuka');

        return view(
            'jobs.show',
            compact(['title', 'job', 'riwayatlist', 'searchLocations', 'searchCategories', 'wishlist', 'ipaddress', 'wishh'])
        );
    }

    public function pasang($nama)
    {
        $jenis = $nama;
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

        $searchLocations  = Location::pluck('name', 'id');
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

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';

        return view(
            'pasang.pasang',
            compact([
                'title',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
                'jenis',
            ])
        );
    }

    public function pilihpaket()
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
        $paket            = Price::all();
        $searchLocations  = Location::pluck('name', 'id');
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
            ->get();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';

        return view(
            'pasang.paket',
            compact([
                'title',
                'paket',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidbarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
            ])
        );
    }

    public function delete($id)
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

        $wish = Wish::where([['ip', '=', $ipaddress], ['idJob', '=', $id]])->first();
        // dd($Wish);
        $wish->delete();

        return redirect()->back();
    }

    public function rekomendasi()
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

        $wishh            = Wish::all();
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $sidbarJobs       = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Jobs';
        $title  = 'Rekomendasi Lowongan Kerja';

        return view(
            'jobs.rekomendasi',
            compact([
                'title',
                'riwayatlist',
                'banner',
                'searchLocations',
                'searchCategories',
                'sidbarJobs', 'wishlist', 'ipaddress', 'wishh',
            ])
        );
    }
}
