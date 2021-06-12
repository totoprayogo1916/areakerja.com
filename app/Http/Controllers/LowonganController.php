<?php

namespace App\Http\Controllers;

use App\Lowongan;

class LowonganController extends Controller
{
    public function store(Request $request)
    {
        $namaFile = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img/rmpcompanylogo'), $namaFile);
        
        Lowongan::insert([
            'namaperusahaan' => $request->namaperusahaan,
            'deskripsiperusahaan' => $request->deskripsiperusahaan,
            'alamatperusahaan' => $request->alamatperusahaan,
            'gambar' => $namaFile,
            'title' => $request->title,
            'salary' => $request->salary,
            'job_nature' => $request->job_nature,
            'pendidikan' => $request->pendidikan,
            'gender' => $request->gender,
            'umur' => $request->umur,
            'bataslamaran' => $request->bataslamaran,
            'requirements' => $request->requirements,
            'full_description' => $request->full_description,
            'short_description'=> $request->short_description,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'web ' => $request->web
        ]);

        return redirect()->route('jobs.pasang');
    }

}
