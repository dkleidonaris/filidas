@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'privacy-policy']])

@section('header', __('Πολιτική απορρήτου'))

@section('title', __('Πολιτική απορρήτου'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Πολιτική Απορρήτου</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Εισαγωγή</h2>
				<p class="leading-relaxed text-gray-700">Η προστασία των προσωπικών σας
					δεδομένων είναι σημαντική για εμάς. Αυτή η πολιτική απορρήτου εξηγεί πώς
					συλλέγουμε, χρησιμοποιούμε και προστατεύουμε τα δεδομένα σας όταν
					χρησιμοποιείτε την ιστοσελίδα μας.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Δεδομένα που Συλλέγουμε</h2>
				<p class="leading-relaxed text-gray-700">Συλλέγουμε δεδομένα όπως το όνομα, το
					email και άλλες πληροφορίες που παρέχετε κατά την χρήση της ιστοσελίδας.
					Χρησιμοποιούμε επίσης Google Analytics για να παρακολουθούμε στατιστικά
					χρήσης, τα οποία μπορεί να περιλαμβάνουν πληροφορίες σχετικά με τις σελίδες
					που επισκέπτεστε, την τοποθεσία σας και την διάρκεια των επισκέψεων σας.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Χρήση των Δεδομένων</h2>
				<p class="leading-relaxed text-gray-700">Χρησιμοποιούμε τα δεδομένα που
					συλλέγουμε για να βελτιώσουμε τις υπηρεσίες μας, να απαντήσουμε στα αιτήματά
					σας και να κατανοήσουμε καλύτερα πώς χρησιμοποιείται η ιστοσελίδα μας.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. Κοινή Χρήση των Δεδομένων</h2>
				<p class="leading-relaxed text-gray-700">Δεν κοινοποιούμε τα προσωπικά σας
					δεδομένα σε τρίτους, εκτός εάν απαιτείται από το νόμο ή για να
					προστατεύσουμε τα δικαιώματά μας.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Ασφάλεια των Δεδομένων</h2>
				<p class="leading-relaxed text-gray-700">Λαμβάνουμε τα κατάλληλα μέτρα
					ασφαλείας για να προστατεύσουμε τα δεδομένα σας από μη εξουσιοδοτημένη
					πρόσβαση, αλλαγή ή διαγραφή.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">6. Τροποποιήσεις</h2>
				<p class="leading-relaxed text-gray-700">Διατηρούμε το δικαίωμα να
					τροποποιήσουμε την παρούσα πολιτική απορρήτου ανά πάσα στιγμή. Συνιστούμε να
					την ανασκοπείτε τακτικά.</p>
			</section>

			<p class="text-sm text-gray-500">Τελευταία ενημέρωση:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
		</div>
	</div>
@endsection
