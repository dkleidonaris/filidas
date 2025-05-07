<?php

namespace App\Mail;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AdminBalancePaid extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $button_url;

    /**
     * Create a new message instance.
     */
    public function __construct(public Payment $payment)
    {
        $this->button_url = route('admin.reservations.show', [$this->payment->reservation]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Επιτυχής εξόφληση υπολοίπου',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.reservations.admin-balance-paid',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
