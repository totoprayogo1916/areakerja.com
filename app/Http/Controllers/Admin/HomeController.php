<?php

namespace App\Http\Controllers\Admin;
use App\Job;

class HomeController
{
    public function index()
    {

        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        return view('admin.home', compact('jobs'));
    }
}
