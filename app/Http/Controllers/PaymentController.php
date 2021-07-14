<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

use Midtrans\notification;

class PaymentController extends Controller
{
    public function notification(Request $request)
    {
        // dd($request);
        $payload      = $request->getContent();
        $notification = json_decode($payload);

        $validSignatureKey = hash('sha512', $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY'));

        if ($notification->signature_key !== $validSignatureKey) {
            return response(['message' => 'Invalid signature'], 403);
        }

        $this->initPaymentGateway();
        $statusCode = null;

        $paymentNotification = new Notification();
        $order               = Lowongan::where('idPembayaran', $paymentNotification->order_id)->firstOrFail();

        if ($order->isPaid()) {
            return response(['message' => 'The order has been paid before'], 422);
        }

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
                    $paymentStatus = \App\pembayaran::CHALLENGE;
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = \App\pembayaran::SUCCESS;
                }
            }
        } elseif ($transaction === 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $paymentStatus = \App\pembayaran::SETTLEMENT;
        } elseif ($transaction === 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = \App\pembayaran::PENDING;
        } elseif ($transaction === 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = \App\pembayaran::DENY;
        } elseif ($transaction === 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = \App\pembayaran::EXPIRE;
        } elseif ($transaction === 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = \App\pembayaran::CANCEL;
        }

        $paymentParams = [
            'status' => 'gagal',
        ];
        $companies = \App\pembayaran::where('id', $order->id);
        // echo $companies;
        $companies->update($paymentParams);

        // if ($paymentStatus && $payment) {
        // 	\DB::transaction(
        // 		function () use ($order, $payment) {
        // 			if (in_array($payment->status, [\App\pembayaran::SUCCESS, \App\pembayaran::SETTLEMENT])) {
        // 				$order->payment_status = \App\pembayaran::PAID;
        // 				$order->status = \App\pembayaran::CONFIRMED;
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
        $companies = \App\pembayaran::where('id', $request->order_id);
        // echo $companies;
        $paymentParams = [
            'status' => 'berhasil',
        ];
        $companies->update($paymentParams);
        dd($request);
    }

    public function unfinish(Request $request)
    {
        dd($request);
    }

    public function failed(Request $request)
    {
        dd($request);
    }
}
