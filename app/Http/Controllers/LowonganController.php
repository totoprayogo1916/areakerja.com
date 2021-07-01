<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Lowongan;
use App\Price;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganController extends Controller
{
    public function formpasang(Request $request)
    {
        // dd($request);
        $paket = Price::where('nama',$request->paket)->get()->first();
        // dd($paket->harga);
        $gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/tmpcompanylogo'), $gambar);
        Lowongan::create([
            'namaperusahaan'      => $request->namaperusahaan,
            'deskripsiperusahaan' => $request->deskripsiperusahaan,
            'alamatperusahaan'    => $request->alamatperusahaan,
            'gambar'              => $gambar,
            'title'               => $request->title,
            'salary'              => $request->salary,
            'job_nature'          => $request->job_nature,
            'alamat_kantor'       => $request->alamat_kantor,
            'min_pendidikan'      => $request->min_pendidikan,
            'gender'              => $request->gender,
            'min_umur'            => $request->min_umur,
            'bataslamaran'        => $request->bataslamaran,
            'full_description'    => $request->full_description,
            'short_description'   => $request->short_description,
            'email'               => $request->email,
            'notelp'              => $request->notelp,
            'web'                 => $request->web,
        ]);

        $nama = $request->namaperusahaan;

        $title = 'Pasang Lowongan Kerja';
        Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        return view('pasang.pembayaran', compact(['title','nama','paket']));
    }

    public function pembayaran()
    {
        // dd($request);
        // $gambar = time() . '.' . $request->gambar->extension();
        // $request->gambar->move(public_path('img/tmpcompanylogo'), $gambar);
        // Lowongan::create([
        //     'namaperusahaan'      => $request->namaperusahaan,
        //     'deskripsiperusahaan' => $request->deskripsiperusahaan,
        //     'alamatperusahaan'    => $request->alamatperusahaan,
        //     'gambar'              => $gambar,
        //     'title'               => $request->title,
        //     'salary'              => $request->salary,
        //     'job_nature'          => $request->job_nature,
        //     'alamat_kantor'       => $request->alamat_kantor,
        //     'min_pendidikan'      => $request->min_pendidikan,
        //     'gender'              => $request->gender,
        //     'min_umur'            => $request->min_umur,
        //     'bataslamaran'        => $request->bataslamaran,
        //     'full_description'    => $request->full_description,
        //     'short_description'   => $request->short_description,
        //     'email'               => $request->email,
        //     'notelp'              => $request->notelp,
        //     'web'                 => $request->web,
        // ]);

        // $title = 'Pasang Lowongan Kerja';
        // Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        // return redirect()->route('home');

        $title = 'Pasang Lowongan Kerja';
        return view('pasang.pembayaran', compact(['title']));
    }
}
