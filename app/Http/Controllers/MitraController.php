<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Alert;
use App\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        // $params = $request->except('_token');
        // dd($params);
        // $paket            = Price::where('nama', $request->paket)->get()->first();
        // $number           = mt_rand(000, 999);
        // $total_pembayaran = $paket->harga + $number;
        // $total            = number_format($total_pembayaran, 0, '.', '.');
        // Pembayaran::create([
        //     'paket'  => $paket->nama,
        //     'harga'  => $total_pembayaran,
        //     'status' => 'NDANGDIBAYAR',
        // ]);
        // $search = Pembayaran::where('harga', $total_pembayaran)->first();
        // $code   = "" . $search->id . "";
        // $this->_generatePaymentToken($request, $total_pembayaran, $code);
        // dd($request->payment_url);




        $gambar = time() . '.' . $request->gambar->extension();
        // dd($gambar);
        $request->gambar->move(public_path('img/mitralogo'), $gambar);
        Mitra::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'no'        => $request->notelp,
            'logo'      => $gambar,
        ]);

        return redirect('pilihpaket');
    }
}
