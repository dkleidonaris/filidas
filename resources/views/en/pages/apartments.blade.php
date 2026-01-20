@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'apartments']])

@section('header', __('Τα διαμερίσματα'))

@section('title')
	{{ __('Αρχική') }}
@endsection

@section('body')
	<div class="mx-auto flex max-w-[1200px] flex-col gap-4 p-4 text-justify">
		{{-- <h2 class="text-center text-3xl font-bold">{{ __('Τα διαμερίσματα') }}</h2> --}}
		<p>Τα πολυτελή διαμερίσματα Filidas (Filidas Apartments) κατασκευάσθηκαν το
			2006 με πολύ μεράκι και ιδιαίτερη φροντίδα για να σας προσφέρουν μια ευκαιρία
			για ξεκούραση και άνετες διακοπές.</p>
		<x-galleries.carousel :photos="$photos" />
		<div>

			<x-galleries.apartments-carousel :apartments="$apartments" />
		</div>

		<p>The apartments include:</p>
		<x-features :features="$features" />
		<p>and can meet every family need. Additional amenities are available upon
			request</p>
		<p>Filidas Apartments are located along the extension of the street named after
			the renowned author Alexandros Papadiamantis, which intersects with the
			island’s ring road at the area known as Akropoli. They offer a spacious free
			parking area and are just 10 minutes from the port and 5 minutes from the
			beach of Megali Ammos.</p>
		<p>Guests have direct access to a supermarket, bakery, pharmacy, banks, and
			post office, while just 50 meters away is the 4th KTEL bus stop, offering
			transportation to all the beaches of our island as well as to the Skiathos
			Airport “Alexandros Papadiamantis.”</p>
		<p>If you have any questions or need further clarification regarding our
			amenities, please don’t hesitate to contact us.
		</p>
		<p>It will be our pleasure to assist you.</p>
		<p>We wish you a wonderful time on the lush green island of Alexandros
			Papadiamantis.</p>
	</div>
@endsection
