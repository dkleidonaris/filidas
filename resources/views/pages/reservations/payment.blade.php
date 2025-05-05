@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true])

@section('title', __('Επιτυχής πληρωμή'))

@section('body')
	@php
		$isSuccess = $status === 'success';
	@endphp

	<div
		id="confirmation-wrapper"
		class="{{ $isSuccess ? 'bg-green-50' : 'bg-red-50' }} flex items-center justify-center px-4 pt-8 transition-all duration-300"
	>
		<div class="w-full max-w-md rounded-2xl bg-white p-8 text-center shadow-lg">
			{{-- Icon --}}
			<svg
				class="{{ $isSuccess ? 'text-green-500' : 'text-red-500' }} mx-auto mb-4 h-16 w-16 animate-pulse"
				fill="none"
				stroke="currentColor"
				stroke-width="2"
				viewBox="0 0 24 24"
			>
				@if ($isSuccess)
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M9 12l2 2l4 -4M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10s-4.48 10 -10 10z"
					/>
				@else
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M6 18L18 6M6 6l12 12"
					/>
				@endif
			</svg>

			{{-- Heading and Message --}}
			<h1
				class="{{ $isSuccess ? 'text-green-600' : 'text-red-600' }} mb-2 text-2xl font-bold"
			>
				{{ $isSuccess ? 'Payment Confirmed!' : 'Payment Failed' }}
			</h1>
			<p class="mb-4 text-gray-600">
				{{ $isSuccess
				    ? 'Thank you for your payment. Redirecting to your reservation page shortly...'
				    : 'Unfortunately, your payment could not be processed. Redirecting back to your reservation page...' }}
			</p>

			{{-- Spinner --}}
			<div class="mt-6 flex justify-center">
				<div
					class="{{ $isSuccess ? 'border-green-500' : 'border-red-500' }} h-6 w-6 animate-spin rounded-full border-4 border-dashed"
				></div>
			</div>

			<p class="mt-4 text-sm text-gray-500">
				You will be redirected in <span id="countdown">5</span> seconds...
			</p>
		</div>

		<script>
			// Countdown and redirect
			let seconds = 5;
			const countdownEl = document.getElementById('countdown');

			const interval = setInterval(() => {
				seconds--;
				countdownEl.textContent = seconds;

				if (seconds <= 0) {
					clearInterval(interval);
					window.location.href =
						"{{ route('reservation.show', ['reservation' => $reservation, 'token' => $reservation->access_token]) }}";
				}
			}, 1000);

			// Adjust for nav height
			window.addEventListener('DOMContentLoaded', () => {
				const nav = document.getElementById('nav');
				const wrapper = document.getElementById('confirmation-wrapper');

				if (nav && wrapper) {
					const navHeight = nav.offsetHeight;
					wrapper.style.minHeight = `calc(100vh - ${navHeight}px)`;
					wrapper.style.paddingTop = `${navHeight + 16}px`;
				}
			});
		</script>
	</div>

@endsection
