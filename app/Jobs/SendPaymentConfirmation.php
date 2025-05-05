<?php

namespace App\Jobs;

use App\Models\Payment;
use App\Mail\AdminBalancePaid;
use App\Mail\AdminDepositPaid;
use App\Mail\CustomerBalancePaid;
use App\Mail\CustomerDepositPaid;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPaymentConfirmation implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Payment $payment)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->payment->reservation->status == 'deposit') {
            Mail::to(env('ADMIN_MAIL'))->send(new AdminDepositPaid($this->payment));
            Mail::to($this->payment->reservation->customer)->send(new CustomerDepositPaid($this->payment));
        } elseif ($this->payment->reservation->status == 'paid') {
            Mail::to(env('ADMIN_MAIL'))->send(new AdminBalancePaid($this->payment));
            
            Mail::to($this->payment->reservation->customer)->send(new CustomerBalancePaid($this->payment));
        }
    }
}
