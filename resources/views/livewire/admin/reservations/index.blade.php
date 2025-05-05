<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Locked;

use App\Models\Reservation;

new class extends Component {
    #[Locked]
    public $filtered_reservations;

    public $customer_q;

    public function mount()
    {
        $this->filterReservations();
    }

    public function filterReservations()
    {
        $this->filtered_reservations = Reservation::when($this->customer_q, function ($q) {
            return $q->whereRelation('customer', 'last_name', 'LIKE', '%' . $this->customer_q . '%');
        })->get();
    }
}; ?>

<div class="space-y-4 p-4">
	<!-- Search Input -->
	<div>
		<input
			type="text"
			wire:model.debounce.300ms="customer_q"
			placeholder="{{ __('Αναζήτηση πελάτη (επώνυμο)') }}"
			class="w-full rounded-md border border-gray-300 px-4 py-2 focus:ring focus:ring-indigo-200"
		/>
	</div>

	<!-- Table of Reservations -->
	<div class="overflow-x-auto">
		<table class="min-w-full border border-gray-300 text-left text-sm">
			<thead class="border-b bg-gray-100">
				<tr>
					<th class="px-4 py-2">#</th>
					<th class="px-4 py-2">{{ __('Όνομα Πελάτη') }}</th>
					<th class="px-4 py-2">{{ __('Email') }}</th>
					<th class="px-4 py-2">{{ __('Ημερ. Κράτησης') }}</th>
					<th class="px-4 py-2">{{ __('Check-in') }}</th>
					<th class="px-4 py-2">{{ __('Check-out') }}</th>
					<th class="px-4 py-2">{{ __('Προκαταβολή') }}</th>
					<th class="px-4 py-2">{{ __('Εξόφληση') }}</th>
					<th class="px-4 py-2">{{ __('Ενέργεια') }}</th>
				</tr>
			</thead>
			<tbody>
				@forelse($filtered_reservations as $reservation)
					<tr class="border-b hover:bg-gray-50">
						<td class="px-4 py-2">{{ $reservation->id }}</td>
						<td class="px-4 py-2">
							{{ $reservation->customer->first_name }}
							{{ $reservation->customer->last_name }}
						</td>
						<td class="px-4 py-2">{{ $reservation->customer->email }}</td>
						<td class="px-4 py-2">{{ $reservation->created_at->format('d/m/Y') }}
						</td>
						<td class="px-4 py-2">
							{{ optional($reservation->checkin_date)->format('d/m/Y') }}</td>
						<td class="px-4 py-2">
							{{ optional($reservation->checkout_date)->format('d/m/Y') }}</td>
						<td class="px-4 py-2 text-center">
							<input
								type="checkbox"
								disabled
								{{ $reservation->status == 'deposit' || $reservation->status == 'paid' ? 'checked' : '' }}
							>
						</td>
						<td class="px-4 py-2 text-center">
							<input
								type="checkbox"
								disabled
								{{ $reservation->status == 'paid' ? 'checked' : '' }}
							>
						</td>
						<td class="px-4 py-2">
							<a
								href="{{ route('admin.reservations.show', $reservation) }}"
								class="inline-flex items-center rounded bg-indigo-600 px-3 py-1 text-sm font-medium text-white hover:bg-indigo-700"
							>
								{{ __('Προβολή') }}
							</a>
						</td>
					</tr>
				@empty
					<tr>
						<td
							colspan="9"
							class="px-4 py-3 text-center text-gray-500"
						>
							{{ __('Δεν βρέθηκαν κρατήσεις.') }}
						</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
