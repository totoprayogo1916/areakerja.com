<?php

namespace App\Http\Controllers\Mitra;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Job;
use App\Location;
use App\Lowongan;
use App\Lowonganmitra;
use App\Mitra;
use App\User;
use Gate;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.index', compact('lowongan','mitra'));
    }

    public function show($slug){

        $user_id = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.show', compact('lowongan','mitra'));
    }



}
