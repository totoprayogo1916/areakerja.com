<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Mitra;

class ProfilController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;

        $mitra = Mitra::where('idUser', $user_id)->first();
        // dd($mitra);
        return view('mitra.profil.index', compact('mitra'));
    }
}
