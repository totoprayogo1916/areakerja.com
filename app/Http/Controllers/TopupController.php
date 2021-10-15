<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;

use Midtrans\notification;

class TopupController extends Controller
{
    public function notification(Request $request)
    {
        // dd($request);
        $payload      = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash('sha512', $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY2'));

        if ($notification->signature_key !== $validSignatureKey) {
            return response(['message' => 'Invalid signature'], 403);
        }

        $this->initPaymentGateway();
        $statusCode = null;

        $paymentNotification = new Notification();

        $transaction = $paymentNotification->transaction_status;
        $type        = $paymentNotification->payment_type;
        $orderId     = $paymentNotification->order_id;
        $fraud       = $paymentNotification->fraud_status;

        $vaNumber   = null;
        $vendorName = null;
        if (! empty($paymentNotification->va_numbers[0])) {
            $vaNumber   = $paymentNotification->va_numbers[0]->va_number;
            $vendorName = $paymentNotification->va_numbers[0]->bank;
        }

        $paymentStatus = null;
        if ($transaction === 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type === 'credit_card') {
                if ($fraud === 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    $paymentStatus = \App\Topup::CHALLENGE;
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = \App\Topup::SUCCESS;
                }
            }
        } elseif ($transaction === 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $paymentStatus = \App\Topup::SETTLEMENT;
        } elseif ($transaction === 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = \App\Topup::PENDING;
        } elseif ($transaction === 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = \App\Topup::DENY;
        } elseif ($transaction === 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = \App\Topup::EXPIRE;
        } elseif ($transaction === 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = \App\Topup::CANCEL;
        }

        $paymentParams = [
            'status' => 'gagal',
        ];
        $companies = \App\Topup::first();
        // echo $companies;
        $companies->update($paymentParams);

        // if ($paymentStatus && $payment) {
        // 	\DB::transaction(
        // 		function () use ($order, $payment) {
        // 			if (in_array($payment->status, [\App\Topup::SUCCESS, \App\Topup::SETTLEMENT])) {
        // 				$order->payment_status = \App\Topup::PAID;
        // 				$order->status = \App\Topup::CONFIRMED;
        // 				$order->save();
        // 			}
        // 		}
        // 	);
        // }

        $message = 'Payment status is : ' . $paymentStatus;

        $response = [
            'code'    => 200,
            'message' => $message,
        ];

        return response($response, 200);
    }

    public function completed(Request $request)
    {
        $companies = \App\Topup::where('id', $request->order_id);
        // echo $companies;
        $paymentParams = [
            'status' => 'berhasil',
        ];
        $user_id = auth()->user()->id;

        $mitra       = Mitra::where('idUser', $user_id)->first();
        $mitra->koin = $mitra->koin + (int) substr($request->order_id, -3);
        $mitra->save();
        $companies->update($paymentParams);

        return redirect(route('mitra.home'));
    }

    public function unfinish(Request $request)
    {
        return redirect(route('mitra.home'));
    }

    public function failed(Request $request)
    {
        return redirect(route('mitra.home'));
    }
}
