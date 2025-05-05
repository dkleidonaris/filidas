<?php

use Livewire\Volt\Component;
use App\Models\Customer;
use App\Models\Country;

use App\Events\ReservationCreated;
use App\Events\ResendReservationEmailRequest;

use App\Livewire\Forms\CustomerForm;
use App\Livewire\Forms\ReservationForm;

use Illuminate\Database\Eloquent\Collection;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;

new class extends Component {
    public CustomerForm $customerForm;

    public ReservationForm $reservationForm;

    #[Locked]
    public $customer_full_name;

    #[Locked]
    public Collection $filtered_customers;

    #[Locked]
    public Collection $filtered_countries;

    public $customer_q;

    public $country_q;

    #[Locked]
    public $user_country_name;

    public function rules()
    {
        return ['adult_no' => 'required|numeric', 'child_no' => 'required|numeric'];
    }

    public function mount($reservation)
    {
        $this->country_q = '';
        $this->customer_q = '';
        $this->filter_customers();
        $this->filter_countries();
        $this->countries = Country::all();

        $this->reservationForm->set($reservation);
        $this->setCustomer($reservation->customer->id);
    }

    public function filter_customers()
    {
        $this->filtered_customers = Customer::when($this->customer_q, function ($q) {
            return $q->where('last_name', 'LIKE', '%' . $this->customer_q . '%');
        })->get();
    }

    public function filter_countries()
    {
        $this->filtered_countries = Country::when($this->country_q, function ($q) {
            return $q->where('name', 'LIKE', '%' . $this->country_q . '%');
        })->get();
    }

    public function setCustomer($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $this->customerForm->set($customer);
            $this->reservationForm->customer_id = $customer->id;
            $this->customer_full_name = $this->customerForm->customer->last_name . ' ' . $this->customerForm->customer->first_name;
            $this->user_country_name = $this->customerForm->customer->country->name;
        } else {
            $this->dispatch('flash-message', ['type' => 'danger', 'message' => 'Δεν υπάρχει αυτός ο πελάτης!']);
            return;
        }
    }

    public function setUserCountry($id)
    {
        $country = Country::find($id);

        if ($country) {
            $this->customerForm->country_id = $country->id;
            $this->user_country_name = $country->name;
        }
    }

    public function updateCustomer()
    {
        if (!$this->customerForm->customer) {
            $this->dispatch('flash-message', ['type' => 'warning', 'message' => ' Επιλέξτε χρήστη πρώτα!']);
            return;
        }

        $this->customerForm->update();
        $this->filter_customers();
        $this->customer_full_name = $this->customerForm->customer->last_name . ' ' . $this->customerForm->customer->first_name;
        $this->dispatch('flash-message', ['type' => 'success', 'message' => 'Τα στοιχεία του χρήστη ενημερώθηκαν επιτυχώς!']);
    }

    public function createCustomer()
    {
        $this->customerForm->set($this->customerForm->create());
        $this->reservationForm->customer_id = $this->customerForm->customer->id;

        $this->filter_customers();
        $this->customer_full_name = $this->customerForm->customer->last_name . ' ' . $this->customerForm->customer->first_name;

        $this->dispatch('flash-message', ['type' => 'success', 'message' => 'Ο χρήστης δημιουργήθηκε και επιλέχτηκε επιτυχώς']);
    }

    public function createReservation()
    {
        $res = $this->reservationForm->create();
        if ($res) {
            ReservationCreated::dispatch($res);
            return redirect()->route('admin.reservations.show', [$res]);
        } else {
            $this->dispatch('flash-message', ['type' => 'danger', 'message' => 'Προέκυψε πρόβλημα']);
        }
    }

    public function updateReservation()
    {
        if ($this->reservationForm->update()) {
            $this->dispatch('flash-message', ['type' => 'success', 'message' => 'Ενημερώθηκε επιτυχώς']);
        }
    }

    public function resendEmail()
    {
        ResendReservationEmailRequest::dispatch($this->reservationForm->reservation);
		$this->dispatch('flash-message', ['type' => 'success', 'message' => 'Εστάλη!']);
    }
}; ?>

<div class="p-2">
	<x-livewire-message />
	<div class="my-4 flex items-center gap-2">
		<div
			wire:click="resendEmail"
			class="flex cursor-pointer items-center gap-2 rounded-md bg-yellow-400 p-2 hover:bg-yellow-500"
		>
			<svg
				class="w-[25px]"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
			>
				<g
					id="SVGRepo_bgCarrier"
					stroke-width="0"
				></g>
				<g
					id="SVGRepo_tracerCarrier"
					stroke-linecap="round"
					stroke-linejoin="round"
				></g>
				<g id="SVGRepo_iconCarrier">
					<path
						d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z"
						stroke="#ffffff"
						stroke-width="0.8399999999999999"
						stroke-linecap="round"
						stroke-linejoin="round"
					></path>
				</g>
			</svg>
			<p>Επαναποστολή email κράτησης εκ νέου στον πελάτη</p>
		</div>
	</div>
	<div class="flex flex-col items-stretch gap-2 rounded-md bg-slate-300 p-2">
		<h2 class="text-2xl font-bold">Πελάτης</h2>
		<div class="">
			<div
				x-data="{ showResults: false }"
				@click.outside="showResults = false"
				class="relative flex flex-col items-stretch gap-1"
			>
				<label
					for="country_q"
					class="text-gray-700"
				>Επιλεγμένος Πελάτης</label>
				<div class="relative">
					<input
						@click="showResults = true"
						wire:model.blur="customer_full_name"
						readonly
						type="text"
						class="w-full cursor-default rounded-md font-bold"
					>
					<svg
						class="absolute inset-y-0 right-2 my-auto w-[25px] -rotate-90"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<g
							id="SVGRepo_bgCarrier"
							stroke-width="0"
						></g>
						<g
							id="SVGRepo_tracerCarrier"
							stroke-linecap="round"
							stroke-linejoin="round"
						></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M16.1795 3.26875C15.7889 2.87823 15.1558 2.87823 14.7652 3.26875L8.12078 9.91322C6.94952 11.0845 6.94916 12.9833 8.11996 14.155L14.6903 20.7304C15.0808 21.121 15.714 21.121 16.1045 20.7304C16.495 20.3399 16.495 19.7067 16.1045 19.3162L9.53246 12.7442C9.14194 12.3536 9.14194 11.7205 9.53246 11.33L16.1795 4.68297C16.57 4.29244 16.57 3.65928 16.1795 3.26875Z"
								fill="#0F0F0F"
							></path>
						</g>
					</svg>
				</div>
				</p>
				<div
					x-show="showResults"
					class="absolute inset-x-0 top-full z-20 rounded-md bg-white shadow-md"
					x-cloak
				>
					<div
						wire:loading
						wire:target="filter_customers"
						class="absolute inset-0 flex flex-col items-stretch bg-gray-600 opacity-50"
					></div>
					<div class="p-2">
						<input
							x-on:input="$wire.filter_customers"
							wire:model"customer_q"
							placeholder="Αναζήτηση πελάτη με επώνυμο"
							type="text"
							class="w-full rounded-md"
						>
					</div>
					<div class="max-h-[200px] overflow-y-auto">
						@if ($filtered_customers->count() >= 1)
							@foreach ($filtered_customers as $customer)
								<p
									@click="showResults = false"
									wire:click="setCustomer({{ $customer->id }})"
									wire:key="{{ $customer->id }}"
									class="cursor-pointer p-1 hover:bg-blue-300"
								>{{ $customer->last_name }} {{ $customer->first_name }}</p>
							@endforeach
						@else
							<p class="p-2">Δε βρέθηκε πελάτης με αυτό το επώνυμο..</p>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div>
			<div class="grid gap-2 md:grid-cols-3 md:flex-row">
				<div class="flex flex-col gap-1">
					<label for="">Επώνυμο</label>
					<input
						wire:model.blur="customerForm.last_name"
						type="text"
						class="rounded-md"
					>
					@error('customerForm.last_name')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div class="flex flex-col gap-1">
					<label for="">Όνομα</label>
					<input
						wire:model.blur="customerForm.first_name"
						type="text"
						class="rounded-md"
					>
					@error('customerForm.first_name')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div
					x-data="{ showResults: false }"
					@click.outside="showResults = false"
					class="relative flex flex-col items-stretch gap-1 self-start"
				>
					<label
						for="country_q"
						class="text-gray-700"
					>Χώρα</label>
					<div class="relative">
						<input
							@click="showResults = true"
							wire:model="user_country_name"
							readonly
							type="text"
							class="w-full cursor-default rounded-md"
						>
						<svg
							class="absolute inset-y-0 right-2 my-auto w-[25px] -rotate-90"
							viewBox="0 0 24 24"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<g
								id="SVGRepo_bgCarrier"
								stroke-width="0"
							></g>
							<g
								id="SVGRepo_tracerCarrier"
								stroke-linecap="round"
								stroke-linejoin="round"
							></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M16.1795 3.26875C15.7889 2.87823 15.1558 2.87823 14.7652 3.26875L8.12078 9.91322C6.94952 11.0845 6.94916 12.9833 8.11996 14.155L14.6903 20.7304C15.0808 21.121 15.714 21.121 16.1045 20.7304C16.495 20.3399 16.495 19.7067 16.1045 19.3162L9.53246 12.7442C9.14194 12.3536 9.14194 11.7205 9.53246 11.33L16.1795 4.68297C16.57 4.29244 16.57 3.65928 16.1795 3.26875Z"
									fill="#0F0F0F"
								></path>
							</g>
						</svg>
					</div>
					</p>
					<div
						x-show="showResults"
						class="absolute inset-x-0 top-full z-10 max-h-[200px] overflow-y-auto rounded-md bg-white shadow-md"
						x-cloak
					>
						<div
							wire:loading
							wire:target="filter_countries"
							class="absolute inset-0 flex flex-col items-stretch bg-gray-600 opacity-50"
						></div>
						<div class="p-2">
							<input
								x-on:input="$wire.filter_countries"
								wire:model="country_q"
								placeholder="Αναζήτηση χώρας..."
								type="text"
								class="w-full rounded-md"
							>
						</div>
						@if ($filtered_countries->count() >= 1)
							@foreach ($filtered_countries as $country)
								<p
									@click="showResults = false"
									wire:click="setUserCountry({{ $country->id }})"
									wire:key="{{ $country->id }}"
									class="cursor-pointer p-1 hover:bg-blue-300"
								>{{ $country->name }}</p>
							@endforeach
						@else
							<p class="p-1">Καμία χώρα δε βρέθηκε με αυτό το όνομα</p>
						@endif
					</div>
					@error('customerForm.country_id')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
			</div>

		</div>
		<div class="grid gap-2 md:grid-cols-2">
			<div class="flex flex-col gap-1">
				<label for="phone">Τηλέφωνο (μαζί με διεθνή κωδικό)</label>
				<input
					id="phone"
					wire:model.blur="customerForm.phone"
					type="text"
					class="rounded-md"
				>
				@error('customerForm.phone')
					<span class="text-red-600">{{ $message }}</span>
				@enderror
			</div>
			<div class="flex flex-col gap-1">
				<label for="">Email</label>
				<input
					id="email"
					wire:model.blur="customerForm.email"
					type="text"
					class="rounded-md"
				>
				@error('customerForm.email')
					<span class="text-red-600">{{ $message }}</span>
				@enderror
			</div>
		</div>
		<div class="my-2 flex flex-col justify-end gap-2 md:flex-row">
			<button
				wire:click="updateCustomer"
				{{ $customer ? '' : 'disabled' }}
				class="{{ $customer_full_name ? 'bg-green-600 hover:bg-green-700 cursor-pointer' : 'bg-gray-400 opacity-70 cursor-not-allowed' }} flex flex-row items-center justify-center gap-1 rounded-md p-2 text-white transition"
			>
				<svg
					class="w-[25px]"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M18.1716 1C18.702 1 19.2107 1.21071 19.5858 1.58579L22.4142 4.41421C22.7893 4.78929 23 5.29799 23 5.82843V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H18.1716ZM4 3C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21L5 21L5 15C5 13.3431 6.34315 12 8 12L16 12C17.6569 12 19 13.3431 19 15V21H20C20.5523 21 21 20.5523 21 20V6.82843C21 6.29799 20.7893 5.78929 20.4142 5.41421L18.5858 3.58579C18.2107 3.21071 17.702 3 17.1716 3H17V5C17 6.65685 15.6569 8 14 8H10C8.34315 8 7 6.65685 7 5V3H4ZM17 21V15C17 14.4477 16.5523 14 16 14L8 14C7.44772 14 7 14.4477 7 15L7 21L17 21ZM9 3H15V5C15 5.55228 14.5523 6 14 6H10C9.44772 6 9 5.55228 9 5V3Z"
						fill="#ffffff"
					></path>
				</svg>
				<p>Ενημέρωση στοιχείων πελάτη</p>
			</button>
			<button
				wire:click="createCustomer"
				class="flex cursor-pointer flex-row items-center justify-center gap-1 rounded-md bg-blue-600 p-2 text-white transition hover:bg-blue-700"
			>
				<svg
					class="w-[25px]"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<g
						id="SVGRepo_bgCarrier"
						stroke-width="0"
					></g>
					<g
						id="SVGRepo_tracerCarrier"
						stroke-linecap="round"
						stroke-linejoin="round"
					></g>
					<g id="SVGRepo_iconCarrier">
						<path
							d="M4 12H20M12 4V20"
							stroke="#fafafa"
							stroke-width="2"
							stroke-linecap="round"
							stroke-linejoin="round"
						></path>
					</g>
				</svg>
				<p>Προσθήκη νέου πελάτη</p>
			</button>
		</div>
	</div>

	<div class="mt-4 rounded-md bg-slate-300 p-2">
		<h2 class="text-2xl font-bold">Στοιχεία κράτησης</h2>
		<div class="flex flex-col gap-2">
			<div class="grid gap-2 md:grid-cols-2">
				<div class="flex flex-col gap-1">
					<label for="check_in">Check-in</label>
					<input
						id="check_in"
						wire:model.live="reservationForm.checkin_date"
						type="date"
						class="rounded-md"
					>
					@error('reservationForm.checkin_date')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div class="flex flex-col gap-1">
					<label for="check_out">Check-out</label>
					<input
						id="check_out"
						wire:model.live="reservationForm.checkout_date"
						type="date"
						class="rounded-md"
					>
					@error('reservationForm.checkout_date')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
			</div>
			<div class="grid gap-2 md:grid-cols-2">
				<div class="flex flex-col gap-1">
					<label for="adult_no">Αριθμός ενηλίκων</label>
					<input
						id="adult_no"
						wire:model.live="reservationForm.adult_no"
						type="number"
						class="rounded-md"
					>
					@error('reservationForm.adult_no')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div class="flex flex-col gap-1">
					<label for="child_no">Αριθμός παιδιών</label>
					<input
						id="child_no"
						wire:model.live="reservationForm.child_no"
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
					<label for="amount">Συνολικό Ποσό</label>
					<input
						id="amount"
						wire:model.blur="reservationForm.amount"
						type="text"
						class="rounded-md"
					>
					@error('reservationForm.amount')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
				<div class="flex flex-col gap-1">
					<label for="deposit">Προκαταβολή</label>
					<input
						id="deposit"
						wire:model.blur="reservationForm.deposit"
						type="text"
						class="rounded-md"
					>
					@error('reservationForm.deposit')
						<span class="text-red-600">{{ $message }}</span>
					@enderror
				</div>
			</div>
		</div>
		@error('reservationForm.customer_id')
			<span class="text-red-600">{{ $message }}</span>
		@enderror
		<div class="my-2 flex flex-col justify-end gap-2 md:flex-row">
			<button
				wire:click="updateReservation"
				class="flex cursor-pointer flex-row items-center justify-center gap-1 rounded-md bg-blue-600 p-2 text-white transition hover:bg-blue-700"
			>
				<svg
					class="w-[25px]"
					viewBox="0 0 24 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						fill-rule="evenodd"
						clip-rule="evenodd"
						d="M18.1716 1C18.702 1 19.2107 1.21071 19.5858 1.58579L22.4142 4.41421C22.7893 4.78929 23 5.29799 23 5.82843V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H18.1716ZM4 3C3.44772 3 3 3.44772 3 4V20C3 20.5523 3.44772 21 4 21L5 21L5 15C5 13.3431 6.34315 12 8 12L16 12C17.6569 12 19 13.3431 19 15V21H20C20.5523 21 21 20.5523 21 20V6.82843C21 6.29799 20.7893 5.78929 20.4142 5.41421L18.5858 3.58579C18.2107 3.21071 17.702 3 17.1716 3H17V5C17 6.65685 15.6569 8 14 8H10C8.34315 8 7 6.65685 7 5V3H4ZM17 21V15C17 14.4477 16.5523 14 16 14L8 14C7.44772 14 7 14.4477 7 15L7 21L17 21ZM9 3H15V5C15 5.55228 14.5523 6 14 6H10C9.44772 6 9 5.55228 9 5V3Z"
						fill="#ffffff"
					></path>
				</svg>
				<p>Ενημέρωση κράτησης</p>
			</button>
		</div>
	</div>
	<div class="mt-4 rounded-md bg-slate-300 p-2">
		<h2 class="text-2xl font-bold mb-2">{{ __('Πληρωμές') }}</h2>
		<div class="overflow-x-auto">
			<table class="min-w-full text-sm text-left border border-gray-300">
				<thead class="bg-gray-100">
					<tr>
						<th class="px-4 py-2">{{ __('Ημερομηνία') }}</th>
						<th class="px-4 py-2">{{ __('Ποσό') }}</th>
						<th class="px-4 py-2">{{ __('Κατάσταση') }}</th>
						<th class="px-4 py-2">{{ __('Μέθοδος Πληρωμής') }}</th>
						<th class="px-4 py-2">{{ __('Αρ. Αναφοράς') }}</th>
					</tr>
				</thead>
				<tbody>
					@forelse($reservationForm->reservation->payments as $payment)
						<tr class="{{$payment->status === 'CAPTURED' ? 'bg-green-500' : 'bg-red-500'}} border-t">
							<td class="px-4 py-2">{{ $payment->date?->format('d/m/Y') ?? '-' }}</td>
							<td class="px-4 py-2">{{ number_format($payment->amount, 2) }} €</td>
							<td class="px-4 py-2">
								{{ $payment->status === 'CAPTURED' ? __('Επιτυχής') : __('Ανεπιτυχής') }}
							</td>
							<td class="px-4 py-2">{{ ucfirst($payment->payment_method) ?? '-' }}</td>
							<td class="px-4 py-2">{{ $payment->order_id ?? '-' }}</td>
						</tr>
					@empty
						<tr>
							<td colspan="5" class="text-center text-gray-600 px-4 py-3">
								{{ __('Δεν υπάρχουν καταγεγραμμένες πληρωμές.') }}
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	
</div>
