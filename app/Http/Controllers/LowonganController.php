<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Location;
use App\Lowongan;
use App\Pembayaran;
use App\Price;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Redirect;

// use Midtrans\Snap;

class LowonganController extends Controller
{
    public function formpasang(Request $request)
    {
        // $params = $request->except('_token');

        $paket            = Price::where('nama', $request->paket)->get()->first();
        $number           = mt_rand(000, 999);
        $total_pembayaran = $paket->harga + $number;
        $total            = number_format($total_pembayaran, 0, '.', '.');
        Pembayaran::create([
            'paket'  => $paket->nama,
            'harga'  => $total_pembayaran,
            'status' => 'NDANGDIBAYAR',
        ]);
        $search = Pembayaran::where('harga', $total_pembayaran)->first();
        $code   = "" . $search->id . "";
        $this->_generatePaymentToken($request, $total_pembayaran, $code);
        // dd($request->payment_url);




        $gambar = time() . '.' . $request->gambar->extension();
        // dd("".$search->id."");
        $request->gambar->move(public_path('storage/tmpcompanylogo'), $gambar);
        Lowongan::create([
            'idPembayaran'        => "" . $search->id . "",
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

        $nama  = $request->namaperusahaan;
        $url   = $request->payment_url;
        $title = 'Pasang Lowongan Kerja';
        Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        return view('pasang.pembayaran', compact(['title', 'nama', 'total', 'url']));
    }

    // public function doCheckout(OrderRequest $request)
    // {
    // 	$params = $request->except('_token');

    // 	$order = \DB::transaction(
    // 		function () use ($params) {
    // 			$order = $this->_saveOrder($params);
    // 			$this->_saveOrderItems($order);
    // 			$this->_generatePaymentToken($order);
    // 			$this->_saveShipment($order, $params);

    // 			return $order;
    // 		}
    // 	);

    // 	if ($order) {
    // 		\Cart::clear();
    // 		$this->_sendEmailOrderReceived($order);

    // 		\Session::flash('success', 'Thank you. Your order has been received!');
    // 		return redirect('orders/received/'. $order->id);
    // 	}

    // 	return redirect('orders/checkout');
    // }

    // /**
    //  * Generate payment token
    //  *
    //  * @param Order $order order data
    //  *
    //  * @return void
    //  */
    private function _generatePaymentToken($order, $total, $code)
    {
        $this->initPaymentGateway();

        // dd($total);
        // $code = "INV/202107006/VII/XXI/00003";
        $customerDetails = [
            'first_name' => $order->namaperusahaan,
            'email'      => $order->email,
            'phone'      => $order->notelp,
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
