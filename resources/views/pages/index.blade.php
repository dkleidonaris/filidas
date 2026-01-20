@extends('layouts.guest', ['navPosition' => 'fixed', 'menuWithBg' => false])

{{-- @section('header', 'Hi') --}}

@section('title', __('Αρχική'))

@section('body')
	<div
		id="hero"
		class="bg-cover bg-fixed"
		style="background-image: url('{{ asset('img/home_bg.jpg') }}');"
	>
		<div class="flex h-screen flex-col backdrop-blur-[2px]">
			<div class="ml-8 mt-64 flex flex-col gap-4 tracking-[5px] md:my-60 md:ml-40">
				<h2
					x-data="{ show: false }"
					x-show="show"
					x-init="setTimeout(() => { show = true }, 500);"
					x-transition
					class="text-2xl text-yellow-400 md:text-4xl"
					x-cloak
				>{{ Str::gr_strtoupper(__('Διαμερίσματα')) }}</h2>
				<h1
					x-data="{ show: false }"
					x-show="show"
					x-init="setTimeout(() => { show = true }, 700);"
					x-transition
					class="text-3xl font-bold text-white drop-shadow-lg md:text-7xl"
					x-cloak
				>{{ __('Διαμερίσματα FILIDAS') }}</h1>
				<h3
					x-data="{ show: false }"
					x-show="show"
					x-init="setTimeout(() => { show = true }, 1000);"
					x-transition
					class="text-2xl font-bold text-white drop-shadow-lg md:text-4xl"
					x-cloak
				>{{ __('Σκιάθος') }}</h1>
			</div>
			<div
				x-data="{ show: false }"
				x-show="show"
				x-init="setTimeout(() => { show = true }, 1200);"
				x-transition
				class="mt-auto w-full"
				x-cloak
			>
				<iframe
					frameborder="0"
					scrolling="no"
					id="bocavwidget"
					src="https://extranet.bookoncloud.com/widget?hotelId=3549&lang={{ App::getLocale() }}"
					class="w-full"
				>
				</iframe>
			</div>
		</div>
	</div>
	<div class="mx-auto max-w-[1200px] p-2">
		<div class="my-12">
			<div class="flex items-center justify-center gap-2">
				<h2 class= "my-4 text-center text-2xl font-bold">@lang('Τα διαμερίσματα')</h2>
				<a href="{{ route('apartments') }}">
					<svg
						class="w-[25px] hover:fill-blue-600"
						fill="#000000"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 52 52"
						enable-background="new 0 0 52 52"
						xml:space="preserve"
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
							<g>
								<path
									d="M48.7,2H29.6C28.8,2,28,2.5,28,3.3v3C28,7.1,28.7,8,29.6,8h7.9c0.9,0,1.4,1,0.7,1.6l-17,17 c-0.6,0.6-0.6,1.5,0,2.1l2.1,2.1c0.6,0.6,1.5,0.6,2.1,0l17-17c0.6-0.6,1.6-0.2,1.6,0.7v7.9c0,0.8,0.8,1.7,1.6,1.7h2.9 c0.8,0,1.5-0.9,1.5-1.7v-19C50,2.5,49.5,2,48.7,2z"
								></path>
								<path
									d="M36.3,25.5L32.9,29c-0.6,0.6-0.9,1.3-0.9,2.1v11.4c0,0.8-0.7,1.5-1.5,1.5h-21C8.7,44,8,43.3,8,42.5v-21 C8,20.7,8.7,20,9.5,20H21c0.8,0,1.6-0.3,2.1-0.9l3.4-3.4c0.6-0.6,0.2-1.7-0.7-1.7H6c-2.2,0-4,1.8-4,4v28c0,2.2,1.8,4,4,4h28 c2.2,0,4-1.8,4-4V26.2C38,25.3,36.9,24.9,36.3,25.5z"
								></path>
							</g>
						</g>
					</svg>
				</a>
			</div>
			<hr
				class="mx-auto my-4 h-1 w-48 rounded-sm border-0 bg-gray-100 dark:bg-gray-700"
			>
			<div class="my-8">
				<x-galleries.apartments-carousel :apartments="$apartments" />
			</div>
		</div>
		<div class="my-12">
			<h2 class="my-4 text-center text-2xl font-bold">@lang('Πως να μας βρείτε')</h2>
			<hr
				class="mx-auto my-4 h-1 w-48 rounded-sm border-0 bg-gray-100 dark:bg-gray-700"
			>
			<div class="my-4 flex items-center justify-center gap-2">
				<svg
					class="w-[40px]"
					viewBox="0 0 1024 1024"
					fill="#000000"
					class="icon"
					version="1.1"
					xmlns="http://www.w3.org/2000/svg"
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
							d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
							fill=""
						></path>
					</g>
				</svg>
				<p class="p-1">@lang('business-address')</p>
			</div>
			<iframe
				id="map"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.337856417506!2d23.480385476516997!3d39.1649736716682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a6e76245b58199%3A0x36d35e9b2c45fe0f!2sFilidas%20apartments!5e0!3m2!1sel!2sgr!4v1742853984247!5m2!1sel!2sgr"
				height="450"
				style="border:0;"
				allowfullscreen=""
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				class="my-2 w-full"
			></iframe>
			<div class="my-8 grid grid-cols-2 gap-4">
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
						fill="#000000"
						version="1.1"
						id="Layer_1"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink"
						viewBox="0 0 512 512"
						enable-background="new 0 0 512 512"
						xml:space="preserve"
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
								d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z"
							></path>
							<path
								d="M327.125,383.969c5.703,0.016,56.875-37.828,56.875-42.656s-57.266-40.906-62.219-40.906s-21.578,19.938-26.062,22.156 c-4.5,2.219-32.5,1.422-63.703-29.781c-31.219-31.188-41.875-67.109-41.875-72.75s26.031-23.062,26.75-27.156 S182.578,128,176.891,128S128,180.5,128,184.875s3.953,60.656,75.219,131.906S321.422,383.938,327.125,383.969z"
							></path>
						</g>
					</svg>
					<a
						href="tel:+306937079820"
						class="rounded-md p-1 text-blue-600 transition hover:bg-blue-200"
					>+30 693 707 9820</a>
				</div>
				<div class="flex items-center gap-2">
					<svg
						class="w-[40px]"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
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
								d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7"
								stroke="#000000"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
							></path>
							<rect
								x="3"
								y="5"
								width="18"
								height="14"
								rx="2"
								stroke="#000000"
								stroke-width="2"
								stroke-linecap="round"
							></rect>
						</g>
					</svg>
					<a
						href="mailto:info@filidas.gr"
						class="rounded-md p-1 text-blue-600 transition hover:bg-blue-200"
					>info@filidas.gr</a>
				</div>
			</div>

		</div>
		<div class="my-12 flex flex-col items-center">
			<h2 class="my-4 text-center text-2xl font-bold">@lang('Ακολουθήστε μας')</h2>
			<hr
				class="mx-auto my-4 h-1 w-48 rounded-sm border-0 bg-gray-100 dark:bg-gray-700"
			>
			<x-nav.social-icons />
		</div>
	</div>
@endsection
