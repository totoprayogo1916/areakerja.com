<?php

namespace App\Http\Controllers;

use App\Calonkandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function formkandidat(Request $request)
    {
        dd($request);
        // Calonkandidat::create([
        //     'namalengkap' => $request->namalengkap,
        //     'alamat'      => $request->alamat,
        //     'biografi'    => $request->biografi,
        //     'skillutama'  => $request->skillutama,
        //     'namaskill'   => $request->namaskill,
        //     'rangeskill'  => $request->rangeskill,
        //     'school'      => $request->school,
        //     'tahun'       => $request->tahun,
        //     'organisasi'  => $request->organisasi,
        //     'jabatan'     => $request->jabatan,
        //     'kantor'      => $request->kantor,
        //     'pekerjaan'   => $request->pekerjaan,
        // ]);
    }
}
