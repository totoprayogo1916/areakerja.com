<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Lowonganmitra;
use App\Mitra;
use App\Organisasi;

class KandidatController extends Controller
{
    public function index()
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $kandidat = Kandidat::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.index', compact('lowongan', 'mitra', 'kandidat'));
    }

    public function show($slug)
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        $kandidat   = Kandidat::where('slug', $slug)->first();
        $idkandidat = $kandidat->id;
        $organisasi = Organisasi::where('idKandidat', $idkandidat)->get();

        return view('mitra.kandidat.show', compact('lowongan', 'mitra', 'kandidat', 'idkandidat', 'organisasi', ));
    }
}
