<?php

namespace App\Http\Controllers\Mitra;

use App\Kandidat;
use App\Mitra;

class AdminCompanyController
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }

    public function kandidat()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }
}
