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

class CustomerDepositPaid extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $button_url;
    /**
     * Create a new message instance.
     */
    public function __construct(public Payment $payment)
    {
        $this->button_url = route_localized('reservation.show', ['reservation' => $this->payment->reservation, 'token' => $this->payment->reservation->access_token], $this->payment->reservation->customer->preferredLocale());
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('Επιτυχής εξόφληση προκαταβολής'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.reservations.customer-deposit-paid',
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
