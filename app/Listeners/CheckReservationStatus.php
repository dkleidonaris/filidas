<?php

namespace App\Listeners;

use App\Events\NewPayment;
use App\Events\ReservationUpdated;
use App\Jobs\SendPaymentConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckReservationStatus implements ShouldQueue
{
    /**
     * Create the event listener.
     */

    protected $listeners = [
        'newPayment',
        'reservationUpdated',
    ];

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewPayment|ReservationUpdated $event): void
    {
        if ($event instanceof NewPayment) {
            $res = $event->payment->reservation;
        } elseif ($event instanceof ReservationUpdated) {
            $res = $event->reservation;
        }
        $successful_payments = $res->successful_payments;
        ray($successful_payments);

        $amount_paid = $successful_payments->sum('amount');

        if ($amount_paid >= $res->amount) {
            $res->status = 'paid';
        } elseif ($amount_paid >= $res->deposit) {
            $res->status = 'deposit';
        }

        $res->save();

        if ($event instanceof NewPayment) {
            SendPaymentConfirmation::dispatch($event->payment);
        }
    }
}
