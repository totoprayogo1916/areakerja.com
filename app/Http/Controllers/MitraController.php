<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\MainSkill;
use App\Mitra;
use App\Price;
use App\Riwayat;
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
        $request->gambar->move(public_path('img/companylogo/'), $gambar);
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

    public function daftarmitra()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        $mainSkill1       = MainSkill::all();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidebarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->take(0)
            ->get();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';
        $skill       = MainSkill::get();

        return view(
            'pasang.mitra',
            compact([
                'title',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
                'skill',
                'mainSkill1',
            ])
        );
    }
}
