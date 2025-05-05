<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Events\NewPayment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Reservation $reservation)
    {
        return view('pages.reservations.show', ['reservation' => $reservation]);
    }

    public function payment(Request $request, Reservation $reservation)
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

        Debugbar::info($digestString);

        $calculatedDigest = base64_encode(hash('sha256', $digestString, true));

        if ($calculatedDigest !== $data['digest']) {
            abort(403, 'Invalid digest (possible tampering)');
        }

        $payment = Payment::where('order_id', $data['orderid'])->first();

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

        return view('pages.reservations.payment', ['reservation' => $reservation, 'status' => $data['type']]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    public function receipt(Request $request, Reservation $reservation)
    {

        return view('pages.reservations.receipt', ['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
