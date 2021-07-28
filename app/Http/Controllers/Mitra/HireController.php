<?php

namespace App\Http\Controllers\Mitra;

use App\Hire;
use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Lowonganmitra;
use App\MainSkill;
use App\Mitra;
use App\Mitra_Kandidat;
use App\Organisasi;
use App\Pengalaman;
use App\Rekomendasi;
use App\Riwayatpendidikan;
use App\Sertifikasi;
use App\Skill;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function index()
    {
        $user_id   = auth()->user()->id;
        $lowongan  = Lowonganmitra::all();
        $mainSkill = MainSkill::all();
        // $kandidat = Kandidat::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();
        $kandidat = Hire::where('idMitra', $mitra->id)->get();

        return view('mitra.hire.index', compact('lowongan', 'mitra', 'kandidat', 'mainSkill'));
    }

    public function show($slug)
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        $kandidat    = Kandidat::where('slug', $slug)->first();
        $idkandidat  = $kandidat->id;
        $organisasi  = Organisasi::where('idKandidat', $idkandidat)->get();
        $pendidikan  = Riwayatpendidikan::where('idKandidat', $idkandidat)->get();
        $pengalaman  = Pengalaman::where('idKandidat', $idkandidat)->get();
        $sertifikasi = Sertifikasi::where('idKandidat', $idkandidat)->get();
        $skill       = Skill::where('idKandidat', $idkandidat)->get();

        return view('mitra.hire.show', compact(
            'lowongan',
            'mitra',
            'kandidat',
            'idkandidat',
            'organisasi',
            'pendidikan',
            'pengalaman',
            'sertifikasi',
            'skill',
        ));
    }
}
