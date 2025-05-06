<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;

use App\Models\Reservation;

new class extends Component {
    #[Validate('required')]
    public $reservation_number;

    #[Validate('required')]
    public $access_token;

    public function mount() {}

    public function search()
    {
        $this->validate();

        $res = App\Models\Reservation::find($this->reservation_number);

        ray($res);

        if (!$res || $res->access_token !== $this->access_token) {
            $this->addError('result', __('my-reservation.not-found'));
            return;
        }

        return redirect()->route('reservation.show', ['reservation' => $res, 'token' => $res->access_token]);
    }
}; ?>

<div>
	<x-livewire-message />

	<div>
		<div>
			<label for="">Res number</label>
			<input
				wire:model.blur="reservation_number"
				type="text"
			>
			@error('reservation_number')
				<span class="text-red-500">{{ $message }}</span>
			@enderror
		</div>
		<div>
			<label for="">Token</label>
			<input
				wire:model.blur="access_token"
				type="text"
			>
			@error('access_token')
				<span class="text-red-500">{{ $message }}</span>
			@enderror
		</div>
		@error('result')
			<span class="text-red-500">{{ $message }}</span>
		@enderror
		<button wire:click="search">Search</button>
	</div>
</div>
