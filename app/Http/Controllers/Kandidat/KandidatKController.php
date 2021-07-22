<?php

namespace App\Http\Controllers\Kandidat;

use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Mitra;
use App\Mitra_Kandidat;

class KandidatKController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }

    public function lowongan()
    {
        $user_id  = auth()->user()->id;
        $mitra    = Kandidat::where('idUser', $user_id)->first();
        $kandidat = Mitra_Kandidat::where('idKandidat', $mitra->id)->get();

        return view('kandidat.lowongan.index', compact(['mitra', 'kandidat']));
    }

    public function show($slug)
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        $mitra2  = Mitra::where('slug', $slug)->first();
        $idmitra = $mitra2->id;

        return view('kandidat.lowongan.show', compact(['mitra', 'mitra2', 'idmitra']));
    }
}
