@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'terms']])

@section('header', __('Όροι χρήσης'))

@section('title', __('Όροι χρήσης'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Όροι Χρήσης</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Περιγραφή Υπηρεσιών</h2>
				<p class="leading-relaxed text-gray-700">Η παρούσα ιστοσελίδα παρέχει
					πληροφορίες για τις υπηρεσίες του καταλύματος και τη δυνατότητα ηλεκτρονικών
					πληρωμών κρατήσεων μέσω ασφαλούς e-commerce διασύνδεσης. Οι κρατήσεις
					πραγματοποιούνται μέσω του συνεργάτη μας. Για να κάνετε κράτηση,
					επισκεφθείτε τον συνεργάτη μας <a
						href="{{ config('links.bookoncloud') }}"
						class="text-blue-500 hover:underline"
						target="_blank"
					>εδώ</a>.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Κρατήσεις και Πληρωμές</h2>
				<p class="leading-relaxed text-gray-700">Οι κρατήσεις πραγματοποιούνται μέσω
					του συνεργάτη μας και οι πληρωμές πραγματοποιούνται μέσω του συστήματος Nexi
					Payments της
					Alpha Bank. Για να δείτε τους διαθέσιμους τρόπους πληρωμής, παρακαλώ
					επισκεφθείτε τη σελίδα <a
						href="{{ route('payment-methods') }}"
						class="text-blue-500 hover:underline"
					>εδώ</a>. Όλες οι συναλλαγές είναι ασφαλείς και προστατευμένες,
					διασφαλίζοντας την εμπιστευτικότητα των δεδομένων των πελατών.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Πολιτική Ακύρωσης</h2>
				<p class="leading-relaxed text-gray-700">Η πολιτική ακύρωσης καθορίζεται από
					τον συνεργάτη μας και αναφέρεται στην ιστοσελίδα του. Παρακαλούμε ελέγξτε
					τους όρους ακύρωσης πριν την πραγματοποίηση της κράτησης.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. Ευθύνη Χρήστη</h2>
				<p class="leading-relaxed text-gray-700">Οι χρήστες είναι υπεύθυνοι για την
					ακριβή καταχώρηση των στοιχείων τους και την τήρηση των όρων χρήσης του
					ιστότοπου. Οποιαδήποτε κακή χρήση του ιστότοπου μπορεί να οδηγήσει σε
					αποκλεισμό.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Τροποποιήσεις</h2>
				<p class="leading-relaxed text-gray-700">Ο ιδιοκτήτης του ιστότοπου διατηρεί
					το δικαίωμα να τροποποιεί τους όρους χρήσης χωρίς προηγούμενη ειδοποίηση.
					Συνιστάται η τακτική ανασκόπηση των όρων χρήσης.</p>
			</section>

			<p class="text-sm text-gray-500">Τελευταία ενημέρωση:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
			</p>
		</div>
	</div>
@endsection
