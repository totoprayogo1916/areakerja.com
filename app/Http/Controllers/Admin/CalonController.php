<?php

namespace App\Http\Controllers\Admin;

use App\Calonkandidat;
use App\Http\Controllers\Controller;

class CalonController extends Controller
{
    public function index()
    {
        $lowongan = Calonkandidat::all();

        return view('admin.calonkandidat.index', compact('lowongan'));
    }

    public function show(Calonkandidat $calonkandidat)
    {
        return view('admin.calonkandidat.show', compact('calonkandidat'));
    }

    public function edit($id)
    {
        $kandidat = Calonkandidat::where('id', $id)->first();

        return view('admin.calonkandidat.edit', compact('kandidat'));
    }
}
