<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Job;
use App\Location;
use App\Lowonganmitra;
use App\Mitra;
use App\User;
use Gate;
use Illuminate\Http\Request;

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

        // $mitra1 = Lowonganmitra::all();
        // dd($mitra);
        $mitra1 = Mitra::where('idUser', $mitra->idUser)->first();
        // dd($mitra1);
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'mitra1'));
    }
}
