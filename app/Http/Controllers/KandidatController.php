<?php

namespace App\Http\Controllers;

use App\Calonkandidat;
use App\Category;
use App\Company;
use App\Job;
use App\Location;
use App\Lowonganmitra;
use App\Mitra;
use Carbon\Carbon;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class KandidatController extends Controller
{
    public function formkandidat(Request $request)
    {
        $file = $request->cv;
        $name = Carbon::now()->format('dmYHis');
        $file->move(public_path('cv'), $name . '.' . $file->getClientOriginalExtension());
        Calonkandidat::create([
            'namalengkap' => $request->namalengkap,
            'email'       => $request->email,
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
            'cv'          => $name,
        ]);

        Alert::success('Berhasil Mendaftar Kandidat', 'Admin sedang memproses akun anda');

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
}
