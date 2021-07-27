<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Lowonganmitra;
use App\Mitra;
use App\Mitra_Kandidat;
use App\Organisasi;
use App\Pengalaman;
use App\Riwayatpendidikan;
use App\Sertifikasi;
use App\Skill;
use App\Rekomendasi;

class KandidatController extends Controller
{
    public function index()
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        // $kandidat = Kandidat::all();
        $kandidat = Rekomendasi::where('idMitra', $user_id)->get();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        return view('mitra.kandidat.index', compact('lowongan', 'mitra', 'kandidat'));
    }

    public function open()
    {
        $user_id  = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $mainKandidat = Kandidat::all();
        $kandidat = Rekomendasi::where('idMitra', $user_id)->get();
        $b = 2;
        // dd($mainKandidat[0]->skillUtama);
        for ($i = 1; $i < $b; $i++) {
            $a = $i - 1;
            if (empty($kandidat[$a]->idKandidat)) {
                if (empty(Kandidat::where('id', $i)->first()->id)) {
                    return redirect()->route('mitra.kandidat.index');
                } else {
                    // dd(empty(Rekomendasi::where('idKandidat', $i)->first()));
                    if (!empty($mainKandidat[$a]->skillUtama == "Front-End Developer") && empty(Rekomendasi::where('idKandidat', $i)->first())) {
                        $newKoin = $mitra->koin - 2;
                        $mitra->update(['koin' => $newKoin]);
                        Rekomendasi::create([
                            'idMitra'    => $mitra->id,
                            'idKandidat' => $i,
                        ]);
                    } else {
                        $b++;
                    }
                }
            } else {
                $b++;
            }
        };

        return redirect()->route('mitra.kandidat.index');
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

        return view('mitra.kandidat.show', compact(
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

    public function hire($id)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        Mitra_Kandidat::create([
            'idMitra'    => $mitra->id,
            'idKandidat' => $id,
        ]);

        return redirect('mitra');
    }
}
