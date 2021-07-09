<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mitra;

class DaftarLowonganController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        return view('mitra.lowongan.index', compact('mitra'));
    }

    public function edit()
    {
        $mitra = Mitra::all();
        return view('mitra.lowongan.edit', compact('mitra'));
    }
}
