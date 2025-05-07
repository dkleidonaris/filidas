@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'terms']])

@section('header', __('Όροι χρήσης'))

@section('title', __('Όροι χρήσης'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Termini di Utilizzo</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Descrizione dei Servizi</h2>
				<p class="leading-relaxed text-gray-700">Questo sito web fornisce informazioni
					sui servizi della struttura e offre la possibilità di effettuare pagamenti
					elettronici in modo sicuro tramite connessione e-commerce. Le prenotazioni
					vengono gestite tramite il nostro partner. Per effettuare una prenotazione,
					visita il nostro partner <a
						href="{{ config('links.bookoncloud') }}"
						class="text-blue-500 hover:underline"
						target="_blank"
					>qui</a>.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Prenotazioni e Pagamenti</h2>
				<p class="leading-relaxed text-gray-700">Le prenotazioni vengono effettuate
					tramite il nostro partner e i pagamenti vengono gestiti attraverso sistemi
					di e-commerce sicuri, inclusi Nexi Payments di Alpha Bank. Per visualizzare
					i metodi di pagamento disponibili, visita la pagina <a
						href="{{ route('payment-methods') }}"
						class="text-blue-500 hover:underline"
					>qui</a>. Tutte le transazioni sono sicure e protette, garantendo la
					riservatezza dei dati dei clienti.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Politica di Cancellazione</h2>
				<p class="leading-relaxed text-gray-700">La politica di cancellazione è
					determinata dal nostro partner ed è disponibile sul suo sito web. Si prega
					di controllare i termini di cancellazione prima di effettuare una
					prenotazione.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. Responsabilità dell'Utente</h2>
				<p class="leading-relaxed text-gray-700">Gli utenti sono responsabili
					dell'inserimento corretto delle proprie informazioni e del rispetto dei
					termini di utilizzo del sito web. Qualsiasi uso improprio del sito web può
					comportare l'esclusione.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Modifiche</h2>
				<p class="leading-relaxed text-gray-700">Il proprietario del sito web si
					riserva il diritto di modificare i termini di utilizzo senza preavviso. Si
					consiglia di rivedere regolarmente i termini di utilizzo.</p>
			</section>

			<p class="text-sm text-gray-500">Ultimo aggiornamento:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
		</div>
	</div>
@endsection
