<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Reservation;

use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class ReservationForm extends Form
{

    public ?Reservation $reservation = null;

    #[Validate('exists:customers,id', message: 'Επιλέξτε πελάτη')]
    public $customer_id;

    #[Validate('required|date')]
    public $checkin_date;

    #[Validate('required|date|after:checkin_date')]
    public $checkout_date;

    #[Validate('required|numeric|gte:1|lte:6')]
    public $adult_no;

    #[Validate('required|numeric|gte:0|lte:6')]
    public $child_no;

    #[Validate('numeric|gte:0|lte:5000')]
    public $amount;

    #[Validate('numeric|lte:amount')]
    public $deposit;

    #[Validate]
    public $status;

    public function set(Reservation $reservation)
    {
        $this->reservation = $reservation;

        $this->checkin_date = $reservation->checkin_date->format('Y-m-d');
        $this->checkout_date = $reservation->checkout_date->format('Y-m-d');
        $this->adult_no = $reservation->adult_no;
        $this->child_no = $reservation->child_no;
        $this->amount = $reservation->amount;
        $this->deposit = $reservation->deposit;
    }

    public function create()
    {
        $this->validate();

        $res = Reservation::create([
            'checkin_date' => $this->checkin_date,
            'checkout_date' => $this->checkout_date,
            'amount' => $this->amount,
            'deposit' => $this->deposit,
            'adult_no' => $this->adult_no,
            'child_no' => $this->child_no,
            'customer_id' => $this->customer_id,
            'access_token' => Str::random(40)
        ]);

        return $res;
    }

    public function update()
    {
        $this->validate();

        $this->reservation->fill([
            'checkin_date' => $this->checkin_date,
            'checkout_date' => $this->checkout_date,
            'amount' => $this->amount,
            'deposit' => $this->deposit,
            'adult_no' => $this->adult_no,
            'child_no' => $this->child_no,
        ]);

        $this->reservation->save();
    }
}
