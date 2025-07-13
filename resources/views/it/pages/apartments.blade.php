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

		<p>Gli appartamenti includono:</p>
		<x-features :features="$features" />
		<p>e possono soddisfare ogni esigenza familiare. Servizi aggiuntivi sono
			disponibili su richiesta.</p>
		<p>I Filidas Apartments si trovano lungo il prolungamento della strada che
			porta il nome del celebre scrittore Alexandros Papadiamantis, la quale
			incrocia la strada periferica dell’isola nella zona chiamata Akropoli. Offrono
			un ampio parcheggio gratuito e distano solo 10 minuti dal porto e 5 minuti
			dalla spiaggia di Megali Ammos.</p>
		<p>Gli ospiti hanno accesso diretto a supermercato, panetteria, farmacia,
			banche e ufficio postale, mentre a soli 50 metri si trova la 4ª fermata del
			KTEL, che consente di raggiungere tutte le spiagge della nostra isola e
			l’aeroporto di Skiathos "Alexandros Papadiamantis".</p>
		<p>Per qualsiasi domanda o chiarimento riguardo ai nostri servizi, non esitate
			a contattarci.</p>
		<p>Saremo lieti di assistervi.</p>
		<p>Vi auguriamo un soggiorno piacevole sull’isola verdeggiante di Alexandros
			Papadiamantis.</p>
	</div>
@endsection
