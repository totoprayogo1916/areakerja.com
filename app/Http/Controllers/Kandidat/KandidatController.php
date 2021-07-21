<?php

namespace App\Http\Controllers\Kandidat;

use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Mitra;

class KandidatController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }

    public function lowongan()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        return view('kandidat.lowongan.index', compact('mitra'));
    }
}
