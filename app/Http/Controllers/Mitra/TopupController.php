<?php

namespace App\Http\Controllers\Mitra;

use App\Lowonganmitra;
use App\Mitra;
use Illuminate\Http\Request;

class TopupController
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.topop.index', compact('mitra'));
    }
}
