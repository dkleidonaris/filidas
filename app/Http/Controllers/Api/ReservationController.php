<?php

namespace App\Http\Controllers\Api;

use App\Models\Payment;
use App\Events\NewPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function payment(Request $request)
    {
        $data = $request->all();

        $digestString =
            $data['version'] .
            $data['mid'] .
            $data['orderid'] .
            $data['status'] .
            $data['orderAmount'] .
            $data['currency'] .
            $data['paymentTotal'] .
            $data['riskScore'] .
            (isset($data['payMethod']) ? $data['payMethod'] : '') .
            $data['txId'] .
            (isset($data['paymentRef']) ? $data['paymentRef'] : '') .
            config('nexi.' . config('nexi.active_env') . '.secret');

        $calculatedDigest = base64_encode(hash('sha256', $digestString, true));

        if ($calculatedDigest !== $data['digest']) {
            abort(403, 'Invalid digest (possible tampering)');
        }

        $payment = Payment::where('order_id', $data['orderid'])->first();

        if ($payment->status !== 'WAITING') {
            return response()->noContent();
        }

        if ($payment) {
            $payment->fill([
                'tx_id' => $data['txId'],
                'status' => $data['status'],
                'date' => Carbon::now(),
                'payment_method' => (isset($data['payMethod']) ? $data['payMethod'] : '')
            ]);
            $payment->save();
        } else {
            abort(400);
        }

        NewPayment::dispatch($payment);

        return response()->noContent();

    }
}
