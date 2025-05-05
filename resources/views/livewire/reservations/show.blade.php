<?php

use Livewire\Volt\Component;

use Livewire\Attributes\Validate;
use Livewire\Attributes\Locked;

use Illuminate\Support\Str;

new class extends Component {
    public $reservation;

    #[Locked]
    public $amount;

    #[Locked]
    public $amount_remaining;

    #[Locked]
    public $amount_payed;

    #[Locked]
    public $version;

    #[Locked]
    public $mid;

    #[Locked]
    public $lang;

    #[Locked]
    public $orderId;

    #[Locked]
    public $orderDesc;

    #[Locked]
    public $orderAmount;

    #[Locked]
    public $currency;

    #[Locked]
    public $payerEmail;

    #[Locked]
    public $confirmUrl;

    #[Locked]
    public $cancelUrl;

    #[Locked]
    public $deposit;

    public function mount($reservation)
    {
        $this->version = 2;
        $this->mid = config('nexi.active.mid');
        $this->lang = App::getLocale();
        $this->orderDesc = 'reservation-' . $reservation->customer->last_name . '-' . $reservation->customer->first_name;
        $this->currency = 'EUR';
        $this->payerEmail = $reservation->customer->email;
        $this->confirmUrl = route('reservation.payment', ['reservation' => $reservation, 'token' => $reservation->access_token, 'type' => 'success']);
        $this->cancelUrl = route('reservation.payment', ['reservation' => $reservation, 'token' => $reservation->access_token, 'type' => 'fail']);

        $this->amount_payed = $reservation->payments()->where('status', 'CAPTURED')->sum('amount');
        $this->amount_remaining = $reservation->amount - $this->amount_payed;

        $this->reservation = $reservation;
        $this->amount = $reservation->amount;
        $this->deposit = $reservation->deposit;
    }

    public function payDeposit()
    {
        if ($this->amount_remaining <= 0) {
            $this->dispatch('flash-message', ['type' => 'danger', 'message' => __('Not possible!')]);
            return;
        }

        $this->orderAmount = $this->deposit - $this->amount_payed;

        if ($this->orderAmount <= 0) {
            $this->dispatch('flash-message', ['type' => 'danger', 'message' => __('Not possible!')]);
            return;
        }

        $this->orderId = Str::random(20);
        $digestString = $this->version . $this->mid . $this->lang . $this->orderId . $this->orderDesc . $this->orderAmount . $this->currency . $this->payerEmail . $this->confirmUrl . $this->cancelUrl . config('nexi.active.secret');
        $digest = base64_encode(hash('sha256', $digestString, true));

        $this->dispatch('submit-payment-form', [
            'version' => $this->version,
            'mid' => $this->mid,
            'lang' => $this->lang,
            'orderId' => $this->orderId,
            'orderDesc' => $this->orderDesc,
            'orderAmount' => $this->orderAmount,
            'currency' => $this->currency,
            'payerEmail' => $this->payerEmail,
            'confirmUrl' => $this->confirmUrl,
            'cancelUrl' => $this->cancelUrl,
            'digest' => $digest,
        ]);
    }

    public function payRemaining()
    {
        if ($this->amount_remaining <= 0) {
            $this->dispatch('flash-message', ['type' => 'danger', 'message' => __('Not possible!')]);
            return;
        }

        $this->orderAmount = $this->amount_remaining;
        $this->orderId = Str::random(20);
        $digestString = $this->version . $this->mid . $this->lang . $this->orderId . $this->orderDesc . $this->orderAmount . $this->currency . $this->payerEmail . $this->confirmUrl . $this->cancelUrl . config('nexi.secret');
        $digest = base64_encode(hash('sha256', $digestString, true));

        $this->dispatch('submit-payment-form', [
            'version' => $this->version,
            'mid' => $this->mid,
            'lang' => $this->lang,
            'orderId' => $this->orderId,
            'orderDesc' => $this->orderDesc,
            'orderAmount' => $this->orderAmount,
            'currency' => $this->currency,
            'payerEmail' => $this->payerEmail,
            'confirmUrl' => $this->confirmUrl,
            'cancelUrl' => $this->cancelUrl,
            'digest' => $digest,
        ]);
    }
}; ?>

<div class="mx-auto max-w-4xl p-2 pb-[100px]">
	<x-livewire-message />
	<div class="flex flex-col gap-2 rounded-md bg-slate-300 p-2">
		<h2 class="mb-2 text-2xl font-bold">{{ __('Στοιχεία πελάτη') }}</h2>
		<div class="grid gap-2 md:grid-cols-3 md:flex-row">
			<div class="flex flex-col gap-1">
				<label for="last_name">{{ __('Επώνυμο') }}</label>
				<input
					readonly
					value="{{ $reservation->customer->last_name }}"
					type="text"
					class="rounded-md"
				>
			</div>
			<div class="flex flex-col gap-1">
				<label for="first_name">{{ __('Όνομα') }}</label>
				<input
					readonly
					value="{{ $reservation->customer->first_name }}"
					type="text"
					class="rounded-md"
				>
			</div>
			<div class="relative flex flex-col items-stretch gap-1 self-start">
				<label
					for="country_q"
					class="text-gray-700"
				>{{ __('Χώρα') }}</label>
				<div>
					<input
						readonly
						value="{{ $reservation->customer->country->name }}"
						type="text"
						class="w-full cursor-default rounded-md"
					>
				</div>
			</div>
		</div>
		<div class="grid gap-2 md:grid-cols-2">
			<div class="flex flex-col gap-1">
				<label for="phone">{{ __('Τηλέφωνο') }}</label>
				<input
					id="phone"
					readonly
					value="{{ $reservation->customer->phone }}"
					type="text"
					class="rounded-md"
				>
			</div>
			<div class="flex flex-col gap-1">
				<label for="">Email</label>
				<input
					id="email"
					readonly
					value="{{ $reservation->customer->email }}"
					type="text"
					class="rounded-md"
				>
			</div>
		</div>
	</div>
	<div class="mt-4 rounded-md bg-slate-300 p-2">
		<h2 class="mb-2 text-2xl font-bold">{{ __('Στοιχεία κράτησης') }}</h2>
		<div class="flex flex-col gap-2">
			<div class="grid gap-2 md:grid-cols-2">
				<div class="flex flex-col gap-1">
					<label for="check_in">Check-in</label>
					<input
						id="check_in"
						readonly
						value="{{ $reservation->checkin_date->translatedFormat('l j F Y') }}"
						type="text"
						class="rounded-md"
					>
				</div>
				<div class="flex flex-col gap-1">
					<label for="check_out">Check-out</label>
					<input
						id="check_out"
						readonly
						value="{{ $reservation->checkout_date->translatedFormat('l j F Y') }}"
						type="text"
						class="rounded-md"
					>
				</div>
			</div>
			<div class="grid gap-2 md:grid-cols-2">
				<div class="flex flex-col gap-1">
					<label for="adult_no">{{ __('Ενήλικες') }}</label>
					<input
						id="adult_no"
						readonly
						value="{{ $reservation->adult_no }}"
						type="number"
						class="rounded-md"
					>
				</div>
				<div class="flex flex-col gap-1">
					<label for="child_no">{{ __('Παιδιά') }}</label>
					<input
						id="child_no"
						readonly
						value="{{ $reservation->child_no }}"
						type="number"
						class="rounded-md"
					>
					@error('reservationForm.child_no')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
			</div>
			<div class="my-4 grid gap-2 md:grid-cols-2">
				<div class="flex flex-col gap-1">
					<label for="amount">{{ __('Συνολικό ποσό') }}</label>
					<input
						id="amount"
						readonly
						value="{{ $reservation->amount }} €"
						type="text"
						class="rounded-md font-bold"
					>
					@error('reservationForm.amount')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div class="flex flex-col gap-1">
					<label for="deposit">{{ __('Προκαταβολή') }}</label>
					<input
						id="deposit"
						readonly
						value="{{ $reservation->deposit }} €"
						type="text"
						class="rounded-md"
					>
					@error('reservationForm.deposit')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
			</div>
		</div>
	</div>
	<div class="mt-4 rounded-md bg-slate-300 p-2">
		<h2 class="mb-2 text-2xl font-bold">{{ __('Στοιχεία πληρωμών') }}</h2>
		<div class="my-4 grid md:grid-cols-2">
			<div class="flex items-center gap-2 text-xl">
				<p>{{ __('Εξοφλημένο ποσό') }}:</p>
				<p class="rounded-md bg-green-500 p-1 text-white">
					{{ $amount_payed }} €</p>
			</div>
			<div class="flex items-center gap-2 text-xl">
				<p>{{ __('Υπόλοιπο') }}:</p>
				<p
					class="{{ $amount_remaining > 0 ? 'bg-yellow-500' : '!text-black bg-none' }} rounded-md p-1 text-white"
				>
					{{ $amount_remaining }} €</p>
			</div>
		</div>
		<div class="flex flex-col gap-4 overflow-x-auto rounded-md bg-white p-2">
			<div class="grid grid-cols-3 text-lg font-bold">
				<p>{{ __('Ημερομηνία') }}</p>
				<p>{{ __('Ποσό') }}</p>
				<p>{{ __('Κατάσταση') }}</p>
			</div>
			@foreach ($reservation->payments as $payment)
				<div
					wire:key="{{ $payment->id }}"
					class="{{ $payment->status == 'CAPTURED' ? 'bg-green-300' : 'bg-red-300' }} grid grid-cols-3 p-2"
				>
					<p>{{ $payment->date->translatedFormat('j/m/Y H:i T') }}
					</p>
					<p>{{ $payment->amount }} €</p>
					@if ($payment->status == 'CAPTURED')
						<p>{{ __('Επιτυχής') }}</p>
					@else
						<p>{{ __('Ανεπιτυχής') }}</p>
					@endif
				</div>
			@endforeach
			<a
				href="{{ route('reservation.receipt', ['reservation' => $reservation, 'token' => $reservation->access_token]) }}"
				class="flex items-center gap-2 self-start rounded-md bg-blue-500 p-2 text-white hover:bg-blue-600 print:hidden"
				target="_blank"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					class="h-5 w-5"
					fill="none"
					viewBox="0 0 24 24"
					stroke="currentColor"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						d="M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2m-4 0H10v4h4v-4z"
					/>
				</svg>
				{{ __('Εκτύπωση συναλλαγών') }}
			</a>
		</div>

		<div class="mt-4 flex flex-col gap-2 rounded-md border-2 border-white p-2">
			<h2 class="mb-2 text-xl font-bold">{{ __('Πληρωμή') }}</h2>
			@if ($deposit - $amount_payed > 0 || $amount_remaining)
				<div class="flex flex-col gap-2">
					<p>{{ __('payment-methods') }}</p>
					<img
						src="{{ asset('img/payment_methods.png') }}"
						class="mx-auto w-full"
						alt=""
					>
				</div>
			@endif
			<div class="flex flex-col gap-2 md:flex-row">
				@if ($deposit - $amount_payed > 0)
					<p
						wire:click="payDeposit"
						class="cursor-pointer rounded-md bg-yellow-500 p-2 text-black"
					>{{ __('Εξόφληση προκαταβολής') }} <span
							class="font-bold italic">({{ $deposit - $amount_payed }} €)</span></p>
				@endif
				@if ($amount_remaining)
					<p
						wire:click="payRemaining"
						class="cursor-pointer rounded-md bg-green-500 p-2 text-black"
					>{{ __('Εξόφληση υπολοίπου') }} <span
							class="font-bold italic">({{ $amount_remaining }} €)</span></p>
				@else
					<p class="p-2">{{ __('Ευχαριστούμε πολύ!') }}</p>
				@endif
			</div>
			@error('payment_amount')
				<span class="text-red-500">{{ $message }}</span>
			@enderror
			<form
				id="payment-form"
				action="{{ config('nexi.active.url') }}"
				method="POST"
				style="display: none;"
			>
				<input
					name="version"
					hidden
					type="text"
				>
				<input
					name="mid"
					hidden
					type="text"
				>
				<input
					name="lang"
					hidden
					type="text"
				>
				<input
					name="orderid"
					hidden
					type="text"
				>
				<input
					name="orderDesc"
					hidden
					type="text"
				>
				<input
					id="orderAmount"
					name="orderAmount"
					hidden
					type="text"
				>
				<input
					name="currency"
					hidden
					type="text"
					value="EUR"
				>
				<input
					name="payerEmail"
					hidden
					type="text"
				>
				<input
					name="confirmUrl"
					hidden
					type="text"
				>
				<input
					name="cancelUrl"
					hidden
					type="text"
				>
				<input
					name="digest"
					type="hidden"
				/>

			</form>
		</div>
	</div>
</div>

@script
	<script>
		Livewire.on('submit-payment-form', (event) => {
			data = event[0];

			document.getElementsByName('version')[0].value = data.version;
			document.getElementsByName('mid')[0].value = data.mid;
			document.getElementsByName('lang')[0].value = data.lang;
			document.getElementsByName('orderid')[0].value = data.orderId;
			document.getElementsByName('orderDesc')[0].value = data
				.orderDesc;
			document.getElementsByName('orderAmount')[0].value = data
				.orderAmount;
			document.getElementsByName('currency')[0].value = data.currency;
			document.getElementsByName('payerEmail')[0].value = data
				.payerEmail;
			document.getElementsByName('confirmUrl')[0].value = data
				.confirmUrl;
			document.getElementsByName('cancelUrl')[0].value = data
				.cancelUrl;
			document.getElementsByName('digest')[0].value = data.digest;

			document.getElementById('payment-form').submit();
		});
	</script>
@endscript
