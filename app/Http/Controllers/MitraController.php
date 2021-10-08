<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\MainSkill;
use App\Mitra;
use App\Pembayaran;
use App\Price;
use App\Riwayat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $number           = mt_rand(000, 999);
        $number2          = mt_rand(0000, 9999);
        $total_pembayaran = 200000 + $number2;
        $total            = number_format($total_pembayaran, 0, '.', '.');
        Pembayaran::create([
            'paket'  => 'Mitra',
            'harga'  => $total_pembayaran,
            'status' => 'NDANGDIBAYAR',
        ]);
        $search = Pembayaran::where('harga', $total_pembayaran)->first();
        $code   = '' . $search->id . '' . $total_pembayaran . '' . $number . '';
        $this->_generatePaymentToken($request, $total_pembayaran, $code);

        $this->validate($request, [
            'nama'      => 'required',
            'email'     => 'required',
            'deskripsi' => 'required',
            'alamat'    => 'required',
            'no'        => 'required',
            'logo'      => 'required',
        ]);

        $logo = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('img/mitralogo/'), $logo);
        Mitra::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'no'        => $request->no,
            'logo'      => $logo,
        ]);

        $nama  = $request->nama;
        $url   = $request->payment_url;
        $title = 'Pasang Lowongan Kerja';
        Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        return view('pasang.pembayaran', compact(['title', 'nama', 'total', 'url']));
    }

    private function _generatePaymentToken($order, $total, $code)
    {
        $this->initPaymentGateway();

        // dd($total);
        // $code = "INV/202107006/VII/XXI/00003";
        $customerDetails = [
            'first_name' => $order->nama,
            'email'      => $order->email,
            'phone'      => $order->no,
        ];

        $params = [
            'enable_payments'     => \App\pembayaran::PAYMENT_CHANNELS,
            'transaction_details' => [
                'order_id'     => $code,
                'gross_amount' => $total,
            ],
            'customer_details' => $customerDetails,
            'expiry'           => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit'       => \App\pembayaran::EXPIRY_UNIT,
                'duration'   => \App\pembayaran::EXPIRY_DURATION,
            ],
        ];

        $snap = \Midtrans\Snap::createTransaction($params);
        // dd($snap);exit;

        if ($snap->token) {
            // dd($snap->redirect_url);
            $order->payment_token = $snap->token;
            $order->payment_url   = $snap->redirect_url;
            // $order->save();
            // dd($snap->redirect_url);
            // return redirect()->to($snap->redirect_url);
        }
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
