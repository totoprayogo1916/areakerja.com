<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMitraRequest;
use App\Mitra;
use App\User;
use App\Lowonganmitra;
use Illuminate\Support\Facades\Hash;

class DaftarLowonganController extends Controller
{
    public function index()
    {
        // $akunmitra = Mitra::where('id',$id)->first();
        $mitra = Lowonganmitra::all();
        return view('mitra.lowongan.index', compact('mitra'));
    }

    public function edit($id)
    {
        $mitra = Mitra::where('id',$id)->first();
        return view('mitra.lowongan.edit', compact('mitra'));
    }

    public function create()
    {
        
        return view('mitra.lowongan.create');
    }

    public function store(Request $request)
    {
        $a = auth()->user()->id;
        Lowonganmitra::create([
            'posisi'     => $request['posisi'],
            'status_pekerjaan'    => $request['status_pekerjaan'],
            'syarat_pekerjaan'    => $request->syarat_pekerjaan,
            'deskripsi_pekerjaan'    => $request->deskripsi_pekerjaan,
            'alamat_kantor'=> $request['alamat_kantor'],
            'min_pendidikan'=> $request['min_pendidikan'],
            'gender'=> $request['gender'],
            'min_umur'=> $request['min_umur'],
            'bataslamaran'=> $request['bataslamaran'],
            'gaji'=> $request['gaji'],
            'email'=> $request['email'],
            'idUser'=> $a
        ]);
        return view('mitra.home');
    }
}