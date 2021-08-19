<?php

namespace App\Http\Controllers;

use App\Calonkandidat;
use App\Category;
use App\Company;
use App\Location;
use App\Lowonganmitra;
use App\Mitra;

use App\Organisasi;
use App\Pengalaman;
use App\RiwayatPendidikan;
use App\Skill;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function formkandidat(Request $request)
    {
        Calonkandidat::create([
            'namalengkap' => $request->namalengkap,
            'alamat'      => $request->alamat,
            'biografi'    => $request->biografi,
            'skillutama'  => $request->skillutama,
            'namaskill'   => $request->namaskill,
            'rangeskill'  => $request->rangeskill,
            'school'      => $request->school,
            'tahun'       => $request->tahun,
            'organisasi'  => $request->organisasi,
            'jabatan'     => $request->jabatan,
            'kantor'      => $request->kantor,
            'pekerjaan'   => $request->pekerjaan,
        ]);

        return redirect()->route('home');
    }

    public function index()
    {
        $lowongan = Lowonganmitra::all();

        return view('admin.calonkandidat.index', compact('lowongan'));
    }

    public function edit($id, Job $job)
    {
        $mitra = Lowonganmitra::where('id', $id)->first();

        $mitraAsli = Mitra::where('idUser', $mitra->idUser)->first();
        $company   = Company::where('deskripsi', $mitraAsli->deskripsi)->first();

        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'company'));
    }

    public function acc()
    {
        $calon         = Calonkandidat::first();
        $jumlah_school = count(collect($calon->school));

        for ($i = 0; $i < $jumlah_school; $i++) {
            RiwayatPendidikan::create([
                'nama_instansi' => $calon->school[$i],
                'tahun'         => $calon->tahun[$i],
            ]);
        }

        $jumlah_skill = count(collect($calon->namaskill));

        for ($i = 0; $i < $jumlah_skill; $i++) {
            Skill::create([
                'nama'    => $calon->namaskill[$i],
                'tingkat' => $calon->rangeskill[$i],
            ]);
        }

        $jumlah_organisasi = count(collect($calon->organisasi));

        for ($i = 0; $i < $jumlah_organisasi; $i++) {
            Organisasi::create([
                'judul'   => $calon->organisasi[$i],
                'jabatan' => $calon->jabatan[$i],
            ]);
        }

        $jumlah_pengalaman = count(collect($calon->kantor));

        for ($i = 0; $i < $jumlah_pengalaman; $i++) {
            Pengalaman::create([
                'nama_pengalaman' => $calon->kantor[$i],
                'posisi'          => $calon->pekerjaan[$i],
            ]);
        }
    }
}
