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
}
