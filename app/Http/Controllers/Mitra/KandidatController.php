<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Lowonganmitra;
use App\Mitra;

class KandidatController extends Controller
{
    public function index()
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.index', compact('lowongan', 'mitra'));
    }

    public function show($slug)
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.show', compact('lowongan', 'mitra'));
    }
}
