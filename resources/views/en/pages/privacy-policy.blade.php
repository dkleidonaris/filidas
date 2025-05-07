@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'privacy-policy']])

@section('header', __('Πολιτική απορρήτου'))

@section('title', __('Πολιτική απορρήτου'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Privacy Policy</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Introduction</h2>
				<p class="leading-relaxed text-gray-700">Protecting your personal data is
					important to us. This privacy policy explains how we collect, use, and
					protect your data when you use our website.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Data We Collect</h2>
				<p class="leading-relaxed text-gray-700">We collect data such as your name,
					email, and other information you provide while using our website. We also
					use Google Analytics to monitor usage statistics, which may include
					information about the pages you visit, your location, and the duration of
					your visits.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Use of Data</h2>
				<p class="leading-relaxed text-gray-700">We use the data we collect to
					improve our services, respond to your requests, and better understand how
					our website is used.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. Data Sharing</h2>
				<p class="leading-relaxed text-gray-700">We do not share your personal data
					with third parties, except when required by law or to protect our rights.
				</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Data Security</h2>
				<p class="leading-relaxed text-gray-700">We take appropriate security
					measures to protect your data from unauthorized access, alteration, or
					deletion.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">6. Changes</h2>
				<p class="leading-relaxed text-gray-700">We reserve the right to modify this
					privacy policy at any time. We recommend reviewing it regularly.</p>
			</section>

			<p class="text-sm text-gray-500">Last updated:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
		</div>
	</div>
@endsection
