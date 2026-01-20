@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'apartment', 'model' => $apartment]])

@section('header', $apartment->name)

@section('title')
	{{ $apartment->name }}
@endsection

@section('body')
	<div class="mx-auto flex max-w-[1200px] flex-col gap-4 p-4 text-justify">
		<div class="grid md:grid-cols-2">
			<div>
				<div class="flex flex-row items-center gap-4">
					<p class="text-lg font-bold">{{ __('Χωρητικότητα') }}:</p>
					<div class="flex items-center gap-2">
						<svg
							class="w-[40px]"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg"
							fill="#000000"
						>
							<g
								id="SVGRepo_bgCarrier"
								stroke-width="0"
							></g>
							<g
								id="SVGRepo_tracerCarrier"
								stroke-linecap="round"
								stroke-linejoin="round"
							></g>
							<g id="SVGRepo_iconCarrier">
								<path
									d="M13.9 2.999A1.9 1.9 0 1 1 12 1.1a1.9 1.9 0 0 1 1.9 1.899zM13.544 6h-3.088a1.855 1.855 0 0 0-1.8 1.405l-1.662 6.652a.667.667 0 0 0 .14.573.873.873 0 0 0 .665.33.718.718 0 0 0 .653-.445L10 9.1V13l-.922 9.219a.71.71 0 0 0 .707.781h.074a.69.69 0 0 0 .678-.563L12 14.583l1.463 7.854a.69.69 0 0 0 .678.563h.074a.71.71 0 0 0 .707-.781L14 13V9.1l1.548 5.415a.718.718 0 0 0 .653.444.873.873 0 0 0 .665-.329.667.667 0 0 0 .14-.573l-1.662-6.652A1.855 1.855 0 0 0 13.544 6z"
								></path>
								<path
									fill="none"
									d="M0 0h24v24H0z"
								></path>
							</g>
						</svg>
						<p>X</p>
						<p>{{ $apartment->adult_capacity }}</p>
					</div>
					@if ($apartment->child_capacity)
						<div class="ml-10 flex items-center gap-2">
							<svg
								class="w-[40px]"
								viewBox="0 0 16 16"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								fill="#000000"
							>
								<g
									id="SVGRepo_bgCarrier"
									stroke-width="0"
								></g>
								<g
									id="SVGRepo_tracerCarrier"
									stroke-linecap="round"
									stroke-linejoin="round"
								></g>
								<g id="SVGRepo_iconCarrier">
									<path
										fill="#000000"
										d="M10 5c0 1.105-0.895 2-2 2s-2-0.895-2-2c0-1.105 0.895-2 2-2s2 0.895 2 2z"
									></path>
									<path
										fill="#000000"
										d="M12.79 10.32l-2.6-2.63c-0.421-0.426-1.004-0.69-1.65-0.69h-1.070c-0 0-0 0-0.001 0-0.648 0-1.235 0.264-1.659 0.69l-2.6 2.63c-0.216 0.129-0.358 0.362-0.358 0.628 0 0.403 0.327 0.73 0.73 0.73 0.266 0 0.499-0.142 0.626-0.355l1.792-1.793v6.47h1.5v-4h1v4h1.5v-6.47l1.75 1.8c0.135 0.175 0.344 0.287 0.58 0.287 0.403 0 0.73-0.327 0.73-0.73 0-0.228-0.105-0.432-0.269-0.566z"
									></path>
								</g>
							</svg>
							<p>X</p>
							<p>{{ $apartment->child_capacity }}</p>
						</div>
					@endif
				</div>
			</div>
		</div>
		<hr class="my-4 h-px border-0 bg-gray-200">
		<x-galleries.carousel :photos="$apartment->photos" />
		<p>L'appartamento include:</p> <x-features :features="$apartment->features" />
		<p>e può soddisfare ogni esigenza familiare. Servizi aggiuntivi sono
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
