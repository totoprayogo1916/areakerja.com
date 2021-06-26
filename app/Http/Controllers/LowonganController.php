<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function formpasang(Request $request)
    {
        // dd($request);
        $gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/tmpcompanylogo'), $gambar);
        Lowongan::create([
            'namaperusahaan'      => $request->namaperusahaan,
            'deskripsiperusahaan' => $request->deskripsiperusahaan,
            'alamatperusahaan'    => $request->alamatperusahaan,
            'gambar'              => $gambar,
            'title'               => $request->title,
            'salary'              => $request->salary,
            'job_nature'          => $request->job_nature,
            'bataslamaran'        => $request->bataslamaran,
            'full_description'    => $request->full_description,
            'short_description'   => $request->short_description,
            'email'               => $request->email,
            'notelp'              => $request->notelp,
            'web'                 => $request->web,
        ]);

        $title = 'Pasang Lowongan Kerja';

        return view('jobs.pasang', compact(['title']));
    }
}
