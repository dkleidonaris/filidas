<?php

namespace App\Listeners;

use App\Mail\BalancePaid;
use App\Events\NewPayment;
use App\Events\ReservationUpdated;
use App\Mail\DepositPaid;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckReservationStatus implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewPayment|ReservationUpdated $event): void
    {
        $res = $event->payment->reservation;
        ray($res);
        $successful_payments = $res->successful_payments;
        ray($successful_payments);

        $amount_paid = $successful_payments->sum('amount');

        ray($amount_paid);

        if ($amount_paid >= $res->amount) {
            $res->status = 'paid';
            Mail::to(env('ADMIN_MAIL'))->send(new BalancePaid($res));
        } elseif ($amount_paid >= $res->deposit) {
            $res->status = 'deposit';
            Mail::to(env('ADMIN_MAIL'))->send(new DepositPaid($res));
        }

        $res->save();
    }
}
