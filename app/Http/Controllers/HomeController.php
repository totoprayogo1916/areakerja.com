<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Job;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMail2;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
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
        $sidbarJobs = Job::whereTopRated(true)
        ->orderBy('id', 'desc')
        ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidbarJobs']));
    }

    public function search(Request $request)
    {

        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner', 'searchLocations','sidbarJobs', 'searchCategories']));
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function kontakform(Request $request)
    {
        dd($request);
        // return view('user.kontak');
    }

    public function formpasang(Request $request)
    {
        dd($request);
        // return view('user.kontak');
    }

    public function kirimmail(Request $request)
    {
        $nama = $request->nama;
        $nomor = $request->nomor;
        $email1 = $request->email;
        $saran = $request->saran;
        $email = "ti.fadelirsyad04@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail($nama,$nomor,$email1,$saran));

        if($kirim){
            echo "Email telah dikirim";
        }

        return view('user.kontak');
    }

    public function lamarmail($name,$umur)
    {
        // $request = [$name,];
        // dd($name,$umur);
        // $nama = $request->nama;
        // $nomor = $request->nomor;
        // $email1 = $request->email;
        // $saran = $request->saran;
        $email = "ti.fadelirsyad04@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail2($umur));

        if($kirim){
            echo "Email telah dikirim";
        }

        return view('user.kontak');
    }
}
