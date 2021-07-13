<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Lowonganmitra;
use App\Mitra;
use Illuminate\Http\Request;

class DaftarLowonganController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        // $akunmitra = Mitra::where('id',$id)->first();
        $mitra1 = Lowonganmitra::all();

        return view('mitra.lowongan.index', compact('mitra', 'mitra1'));
    }

    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $mitra1  = Mitra::where('id', $id)->first();

        return view('mitra.lowongan.edit', compact('mitra', 'mitra1'));
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.lowongan.create', compact('mitra'));
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $a       = auth()->user()->id;
        Lowonganmitra::create([
            'posisi'              => $request['posisi'],
            'status_pekerjaan'    => $request['status_pekerjaan'],
            'syarat_pekerjaan'    => $request->syarat_pekerjaan,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
            'alamat_kantor'       => $request['alamat_kantor'],
            'min_pendidikan'      => $request['min_pendidikan'],
            'gender'              => $request['gender'],
            'min_umur'            => $request['min_umur'],
            'bataslamaran'        => $request['bataslamaran'],
            'gaji'                => $request['gaji'],
            'email'               => $request['email'],
            'idUser'              => $a,
        ]);

        return view('mitra.home', compact('mitra'));
    }
}
