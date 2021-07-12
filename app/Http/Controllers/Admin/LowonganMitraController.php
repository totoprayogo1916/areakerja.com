<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lowonganmitra;
use App\Mitra;
use Illuminate\Http\Request;

class LowonganMitraController extends Controller
{
    public function index()
    {
        $lowongan = Lowonganmitra::all();

        return view('admin.lowonganmitra.index', compact('lowongan'));
    }
}
