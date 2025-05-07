@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'terms']])

@section('header', __('Όροι χρήσης'))

@section('title', __('Όροι χρήσης'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Terms of Use</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Service Description</h2>
				<p class="leading-relaxed text-gray-700">This website provides information
					about the property services and offers the ability to make secure electronic
					payments via an e-commerce connection. Reservations are handled through our
					partner. To make a reservation, please visit our partner <a
						href="{{ config('links.bookoncloud') }}"
						class="text-blue-500 hover:underline"
                        target="_blank"
					>here</a>.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Reservations and Payments</h2>
				<p class="leading-relaxed text-gray-700">Reservations are made through our
					partner, and payments are processed through secure e-commerce systems,
					including Nexi Payments by Alpha Bank. To view the available payment
					methods, please visit the <a
						href="{{ route('payment-methods') }}"
						class="text-blue-500 hover:underline"
					>payment methods page</a>. All transactions are secure and protected,
					ensuring the confidentiality of customer data.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Cancellation Policy</h2>
				<p class="leading-relaxed text-gray-700">The cancellation policy is
					determined by our partner and is available on their website. Please review
					the cancellation terms before making a reservation.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. User Responsibility</h2>
				<p class="leading-relaxed text-gray-700">Users are responsible for providing
					accurate information and complying with the terms of use of this website.
					Any misuse of the website may result in exclusion.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Modifications</h2>
				<p class="leading-relaxed text-gray-700">The website owner reserves the right
					to modify the terms of use without prior notice. It is recommended to review
					the terms of use regularly.</p>
			</section>

			<p class="text-sm text-gray-500">Last updated:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
		</div>
	</div>
@endsection
