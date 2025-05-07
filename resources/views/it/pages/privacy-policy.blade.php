@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'privacy-policy']])

@section('header', __('Πολιτική απορρήτου'))

@section('title', __('Πολιτική απορρήτου'))

@section('body')
	<div class="container mx-auto max-w-[1200px] p-2">
		<div class="rounded-2xl bg-white p-2 text-justify">
			<h1 class="mb-6 text-3xl font-bold">Informativa sulla Privacy</h1>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">1. Introduzione</h2>
				<p class="leading-relaxed text-gray-700">La protezione dei vostri dati
					personali è importante per noi. Questa informativa sulla privacy spiega come
					raccogliamo, utilizziamo e proteggiamo i vostri dati quando utilizzate il
					nostro sito web.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">2. Dati che Raccogliamo</h2>
				<p class="leading-relaxed text-gray-700">Raccogliamo dati come nome, email e
					altre informazioni che fornite durante l'utilizzo del sito web. Utilizziamo
					anche Google Analytics per monitorare le statistiche di utilizzo, che
					possono includere informazioni sulle pagine che visitate, la vostra
					posizione e la durata delle vostre visite.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">3. Utilizzo dei Dati</h2>
				<p class="leading-relaxed text-gray-700">Utilizziamo i dati che raccogliamo
					per migliorare i nostri servizi, rispondere alle vostre richieste e
					comprendere meglio come viene utilizzato il nostro sito web.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">4. Condivisione dei Dati</h2>
				<p class="leading-relaxed text-gray-700">Non condividiamo i vostri dati
					personali con terzi, salvo ove richiesto dalla legge o per proteggere i
					nostri diritti.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">5. Sicurezza dei Dati</h2>
				<p class="leading-relaxed text-gray-700">Adottiamo le misure di sicurezza
					appropriate per proteggere i vostri dati da accessi non autorizzati,
					alterazioni o cancellazioni.</p>
			</section>

			<section class="mb-8">
				<h2 class="mb-4 text-2xl font-semibold">6. Modifiche</h2>
				<p class="leading-relaxed text-gray-700">Ci riserviamo il diritto di
					modificare questa informativa sulla privacy in qualsiasi momento. Si
					consiglia di rivederla regolarmente.</p>
			</section>

			<p class="text-sm text-gray-500">Ultimo aggiornamento:
				{{ \Carbon\Carbon::parse('2025/05/07')->translatedFormat('d M Y') }}</p>
		</div>
	</div>

@endsection
