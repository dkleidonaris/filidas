<?php

namespace App\Listeners;

use App\Events\ResendReservationEmailRequest;
use App\Events\ReservationCreated;
use App\Mail\ReservationDetails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReservationEmail implements ShouldQueue
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
    public function handle(ReservationCreated|ResendReservationEmailRequest $event): void
    {
        $mail = new ReservationDetails($event->reservation);
        Mail::to($event->reservation->customer)->send($mail);
    }
}
