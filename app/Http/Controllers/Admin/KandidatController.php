<?php

namespace App\Http\Controllers\Admin;

use App\Calonkandidat;
use App\Http\Controllers\Controller;
use App\Kandidat;
use App\Organisasi;
use App\Pengalaman;
use App\Riwayatpendidikan;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KandidatController extends Controller
{
    public function acc($id, Request $request)
    {
        $calon = Calonkandidat::where('id', $id)->first();
        User::create([
            'name'     => $request->namalengkap,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        $idUser = User::where('name', $request->namalengkap)->first();

        $idUser->roles()->sync('4');

        Kandidat::create([
            'nama'     => $request->namalengkap,
            'idSkill'  => 1,
            'domisili' => $request->alamat,
            'biografi' => $request->biografi,
            'slug'     => Str::slug($request->namalengkap),
            'status'   => 'unhire',
            'idUser'   => $idUser->id,
        ]);

        $idKandidat    = Kandidat::where('nama', $request->namalengkap)->first();
        $jumlah_school = count(collect($calon->school));

        for ($i = 0; $i < $jumlah_school; $i++) {
            Riwayatpendidikan::create([
                'nama_instansi' => $calon->school[$i],
                'tahun'         => $calon->tahun[$i],
                'idKandidat'    => $idKandidat->id,
            ]);
        }

        $jumlah_skill = count(collect($calon->namaskill));

        for ($i = 0; $i < $jumlah_skill; $i++) {
            Skill::create([
                'nama'       => $calon->namaskill[$i],
                'tingkat'    => $calon->rangeskill[$i],
                'idKandidat' => $idKandidat->id,
            ]);
        }

        $jumlah_organisasi = count(collect($calon->organisasi));

        for ($i = 0; $i < $jumlah_organisasi; $i++) {
            Organisasi::create([
                'judul'      => $calon->organisasi[$i],
                'jabatan'    => $calon->jabatan[$i],
                'idKandidat' => $idKandidat->id,
            ]);
        }

        $jumlah_pengalaman = count(collect($calon->kantor));

        for ($i = 0; $i < $jumlah_pengalaman; $i++) {
            Pengalaman::create([
                'nama_pengalaman' => $calon->kantor[$i],
                'posisi'          => $calon->pekerjaan[$i],
                'idKandidat'      => $idKandidat->id,
            ]);
        }

        $lowongan = Calonkandidat::all();

        return view('admin.calonkandidat.index', compact('lowongan'));
    }
}
