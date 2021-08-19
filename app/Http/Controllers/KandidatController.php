<?php

namespace App\Http\Controllers;

use App\Calonkandidat;
use Illuminate\Http\Request;
use App\RiwayatPendidikan;

class KandidatController extends Controller
{
    public function formkandidat(Request $request)
    {
        $jumlah_school = count(collect($request->school));

        for ($i = 0; $i < $jumlah_school; $i++){
             RiwayatPendidikan::create([
                'nama_instansi' => $request->school[$i],
                'tahun' => $request->tahun[$i]
            ]);
        }

        // foreach ($request->school as $school) {
            // dd($school);

    //     Calonkandidat::create([
    //         'namalengkap' => $request->namalengkap,
    //         'alamat'      => $request->alamat,
    //         'biografi'    => $request->biografi,
    //         'skillutama'  => $request->skillutama,
    //         'namaskill'   => $request->namaskill,
    //         'rangeskill'  => $request->rangeskill,
    //         'school'      => $request->school,
    //         'tahun'       => $request->tahun,
    //         'organisasi'  => $request->organisasi,
    //         'jabatan'     => $request->jabatan,
    //         'kantor'      => $request->kantor,
    //         'pekerjaan'   => $request->pekerjaan,
    //     ]);
        // }
    }
}
