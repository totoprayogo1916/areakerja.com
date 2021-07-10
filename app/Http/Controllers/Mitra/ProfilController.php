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
use App\Mitra;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ProfilController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;

        $mitra = Mitra::where('idUser', $user_id)->first();
        // dd($mitra);
        return view('mitra.profil.index', compact('mitra'));
    }
}
