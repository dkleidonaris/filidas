<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\RateLimiter;

use App\Models\Reservation;

new class extends Component {
    #[Validate('required|numeric')]
    public $reservation_number;

    #[Validate('required')]
    public $access_token;

    protected ?Reservation $reservation = null;

    public function mount() {}

    public function search()
    {
        $this->validate();

        $this->reservation = App\Models\Reservation::find($this->reservation_number);

        if (!$this->reservation) {
            $this->addError('result', __('my-reservation.not-found'));
            return;
        }

        $executed = RateLimiter::attempt('my-reservation:' . $this->reservation->id, $perMinute = 5, function () {
            if ($this->reservation->access_token === $this->access_token) {
                return redirect()->route('reservation.show', ['reservation' => $this->reservation, 'token' => $this->reservation->access_token]);
            } else {
                $this->addError('result', __('my-reservation.not-found'));
            }
        });

        if (!$executed) {
            $seconds = RateLimiter::availableIn('my-reservation:' . $this->reservation->id);
            $this->addError('result', trans_choice('messages.too-many-attempts', $seconds, ['seconds' => $seconds]));
        }
    }
}; ?>

<div>
	<x-livewire-message />
	<div class="mx-auto flex max-w-3xl flex-col items-stretch gap-2 p-2">
		<div class="flex flex-col gap-2">
			<label for="">{{ __('Αριθμός κράτησης') }}</label>
			<input
				wire:model.blur="reservation_number"
				type="text"
				class="w-full rounded-md"
			>
		</div>
		<div class="flex flex-col gap-2">
			<label for="">{{ __('Κωδικός πρόσβασης') }}</label>
			<input
				wire:model.blur="access_token"
				type="text"
				class="rounded-md"
			>

		</div>
		<button
			wire:click="search"
			class="mt-2 self-center rounded-md bg-blue-500 p-2 text-white"
		>Search</button>
		@error('reservation_number')
			<span class="text-red-500">{{ $message }}</span>
		@enderror
		@error('access_token')
			<span class="text-red-500">{{ $message }}</span>
		@enderror
		@error('result')
			<span class="text-red-500">{{ $message }}</span>
		@enderror
	</div>
</div>
