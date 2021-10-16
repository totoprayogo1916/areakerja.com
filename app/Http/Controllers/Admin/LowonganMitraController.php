<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Job;
use App\Location;
use App\Lowonganmitra;
use App\Mitra;

class LowonganMitraController extends Controller
{
    public function index()
    {
        $lowongan = Lowonganmitra::all();

        return view('admin.lowonganmitra.index', compact('lowongan'));
    }

    public function edit($id, Job $job)
    {
        $mitra = Lowonganmitra::where('id', $id)->first();

        $mitraAsli = Mitra::where('idUser', $mitra->idUser)->first();
        $company   = Company::where('deskripsi', $mitraAsli->deskripsi)->first();
        // $mitra1 = Lowonganmitra::all();
        // dd($mitra);
        // $mitra1 = Company::where('email', $mitra->idUser)->first();
        // dd($mitra1);
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'company'));
    }
}
