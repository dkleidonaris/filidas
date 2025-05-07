@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true])

@section('title', __('Επιτυχής πληρωμή'))

@section('body')
	@php
		$isSuccess = $payment->status === 'CAPTURED';
	@endphp

	<style>
		@media print {
			body * {
				visibility: hidden;
			}

			#confirmation-wrapper,
			#confirmation-wrapper * {
				visibility: visible;
			}

			#confirmation-wrapper {
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				padding: 20px;
				background: white !important;
				color: black !important;
				-webkit-print-color-adjust: exact;
			}

			#confirmation-wrapper .bg-green-50,
			#confirmation-wrapper .bg-red-50 {
				background: white !important;
			}

			#confirmation-wrapper .text-green-600,
			#confirmation-wrapper .text-red-600 {
				color: black !important;
			}

			#confirmation-wrapper .bg-gray-100 {
				background: #f5f5f5 !important;
			}

			.no-print {
				display: none !important;
			}
		}
	</style>

	<div
		id="confirmation-wrapper"
		class="{{ $isSuccess ? 'bg-green-50' : 'bg-red-50' }} flex items-center justify-center px-4 py-8 transition-all duration-300"
	>
		<div class="w-full max-w-3xl rounded-2xl bg-white p-8 text-center shadow-lg">
			<img src="{{asset('img/filidas_logo.png')}}" alt="Logo" class="mx-auto w-[300px]" />
			{{-- Reservation and Client Details --}}
			<div class="mt-4 flex flex-col gap-2 rounded-lg bg-gray-100 p-4 text-left">
				<h2 class="mt-4 text-lg font-bold">{{ __('Στοιχεία πληρωμής') }}</h2>
				<p><strong>{{ __('Αριθμός συναλλαγής') }}:</strong> {{ $payment->tx_id }}</p>
				@if ($isSuccess)
					<p><strong>{{ __('Τρόπος πληρωμής') }}:</strong>
						{{ ucfirst($payment->payment_method) }}</p>
				@endif
				<p><strong>{{ __('Ποσό') }}:</strong>
					€{{ number_format($payment->amount, 2) }}</p>
				<p><strong>{{ __('Ημ/νία συναλλαγής') }}:</strong>
					{{ $payment->date->format('d/m/Y H:i T') }}</p>
				@if ($isSuccess)
					<p><strong>{{ __('Κατάσταση') }}:</strong>
						<span class="rounded-md bg-green-400 p-2">@lang('Επιτυχής')</span>
					</p>
				@else
					<p><strong>{{ __('Κατάσταση') }}:</strong>
						<span class="rounded-md bg-red-400 p-2">@lang('Ανεπιτυχής')</span>
					</p>
				@endif
				<h2 class="mt-4 text-lg font-bold">{{ __('Στοιχεία κράτησης') }}</h2>
				<p><strong>{{ __('Αριθμός κράτησης') }}:</strong> {{ $reservation->id }}
				</p>
				<p><strong>Check-in:</strong>
					{{ $reservation->checkin_date->format('d/m/Y') }}</p>
				<p><strong>Check-out:</strong>
					{{ $reservation->checkout_date->format('d/m/Y') }}</p>
				<p><strong>{{ __('Ενήλικες') }}:</strong>
					{{ $reservation->adult_no }}</p>
					<p><strong>{{ __('Παιδιά') }}:</strong>
						{{ $reservation->child_no }}</p>
				<p><strong>{{ __('Συνολικό ποσό') }}:</strong>
					€{{ number_format($reservation->amount, 2) }}</p>
				<p><strong>{{ __('Προκαταβολή') }}:</strong>
					€{{ number_format($reservation->deposit, 2) }}</p>

				<h2 class="mt-4 text-lg font-bold">{{ __('Στοιχεία πελάτη') }}</h2>
				<p><strong>{{ __('Όνομα') }}:</strong>
					{{ $reservation->customer->last_name }}
					{{ $reservation->customer->first_name }}
				</p>
				<p><strong>Email</strong>
					{{ $reservation->customer->email }}
				</p>
				<p><strong>{{ __('Τηλέφωνο') }}:</strong>
					{{ $reservation->customer->phone }}</p>
			</div>

			{{-- Action Buttons --}}
			<div class="no-print mt-6 flex flex-col gap-4">
				@if ($isSuccess)
					<button
						onclick="window.print()"
						class="w-full rounded-lg bg-blue-500 px-4 py-2 font-semibold text-white shadow-md hover:bg-blue-600"
					>
						{{ __('Εκτύπωση Απόδειξης') }}
					</button>
				@endif
				<a
					href="{{ route('reservation.show', [$reservation, $reservation->access_token]) }}"
					class="w-full rounded-lg bg-gray-500 px-4 py-2 font-semibold text-white shadow-md hover:bg-gray-600"
				>
					{{ __('Σελίδα κράτησης') }}
				</a>
			</div>
		</div>
	</div>
@endsection
