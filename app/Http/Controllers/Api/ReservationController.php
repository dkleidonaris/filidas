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

        $fields = [
            'version',
            'mid',
            'orderid',
            'status',
            'orderAmount',
            'currency',
            'paymentTotal',
            'message',
            'riskScore',
            'payMethod',
            'txId',
            'Sequence',
            'SeqTxId',
            'paymentRef'
        ];

        $values = array_map(fn($f) => $data[$f] ?? '', $fields);

        $string = implode('', $values)
            . config('nexi.' . config('nexi.active_env') . '.secret');

        // Ensure UTF-8 (safe guard)
        $string = mb_convert_encoding($string, 'UTF-8', 'UTF-8');

        $calculatedDigest = base64_encode(hash('sha256', $string, true));

        if ($calculatedDigest !== $data['digest']) {
            abort(403, 'Invalid digest (possible tampering)');
        }

        $payment = Payment::where('order_id', $data['orderid'])->first();

        if ($payment && $payment->status !== 'WAITING') {
            return response()->noContent();
        } else {
            abort(400);
        }


        $payment->fill([
            'tx_id' => $data['txId'],
            'status' => $data['status'],
            'date' => Carbon::now(),
            'payment_method' => (isset($data['payMethod']) ? $data['payMethod'] : '')
        ]);
        $payment->save();

        NewPayment::dispatch($payment);

        return response()->noContent();
    }
}
