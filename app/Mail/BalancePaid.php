<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BalancePaid extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $button_url;

    /**
     * Create a new message instance.
     */
    public function __construct(public Reservation $reservation)
    {
        $this->button_url = route_localized('admin.reservations.show', ['reservation' => $this->reservation], $this->reservation->customer->preferredLocale());
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Εξόφληση υπολοίπου',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.reservations.balance-paid',
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
