<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lowonganmitra;
use App\Mitra;

class LowonganMitraController extends Controller
{
    public function index()
    {
        $lowongan = Lowonganmitra::all();

        return view('admin.lowonganmitra.index', compact('lowongan'));
    }
}
