@props(['menuWithBg', 'navPosition'])

<div
	id="nav"
	x-data="{ scrolled: false, mobMenuShow: false }"
	@if (!$menuWithBg) x-init="window.addEventListener('scroll', () => {
    const trigger = document.getElementById('hero').offsetHeight;
    scrolled = window.scrollY > trigger;
})" @endif
	@if (!$menuWithBg) :class="scrolled ? 'bg-white shadow-md' : 'bg-transparent'" @endif
	class="{{ $navPosition }} {{ $menuWithBg ? 'bg-white shadow-md' : '' }} left-0 top-0 z-50 flex w-full flex-row items-center gap-8 p-4 transition-all duration-300"
	x-cloak
>
	{{-- Logo --}}
	<div>
		<a href="{{ route('index') }}">
			<img
				width="200"
				src="{{ asset('img/filidas_logo.png') }}"
				alt="Logo"
				class="transition hover:drop-shadow-md"
			></a>
	</div>
	<div
		@if (!$menuWithBg) :class="scrolled ? 'text-black' : 'text-white'" @endif
		class="{{ $menuWithBg ? 'text-black' : '' }} ml-auto hidden items-center gap-8 text-xl md:flex"
	>
		<x-menu-item
			route="index"
			:name="Str::gr_strtoupper(__('Αρχική'), 'UTF-8')"
		/>
		<x-menu-item
			route="apartments"
			:name="Str::gr_strtoupper(__('Τα διαμερίσματα'), 'UTF-8')"
		/>
		<x-menu-item
			route="contact"
			:name="Str::gr_strtoupper(__('Επικοινωνία'), 'UTF-8')"
		/>

		<a
			href="{{ route('book') }}"
			:class="scrolled ? 'animate-none' : 'animate-blink'"
			class="rounded-md bg-[#FF6B6B] p-2 text-white transition hover:scale-105 hover:animate-none"
		>{{Str::gr_strtoupper(__('Κάντε κράτηση'))}}</a>
	</div>
	{{-- Mobile Menu --}}
	<div class="ml-auto md:hidden">
		<svg
			@click="mobMenuShow = true"
			width="60"
			height="60"
			viewBox="0 0 24 24"
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
					d="M20 7L4 7"
					@if (!$menuWithBg) :class="scrolled ? 'stroke-black' : 'stroke-white'"  @else class="stroke-black" @endif
					stroke-width="1.5"
					stroke-linecap="round"
				></path>
				<path
					d="M20 12L4 12"
					@if (!$menuWithBg) :class="scrolled ? 'stroke-black' : 'stroke-white'" @else class="stroke-black" @endif
					stroke-width="1.5"
					stroke-linecap="round"
				></path>
				<path
					d="M20 17L4 17"
					@if (!$menuWithBg) :class="scrolled ? 'stroke-black' : 'stroke-white'" @else class="stroke-black" @endif
					stroke-width="1.5"
					stroke-linecap="round"
				></path>
			</g>
		</svg>
		<div
			x-show="mobMenuShow"
			x-transition:enter="transition ease-out duration-500"
			x-transition:enter-start="-translate-x-full"
			x-transition:enter-end="translate-x-none"
			x-transition:leave="transition ease-in duration-500"
			x-transition:leave-start="translate-x-none"
			x-transition:leave-end="-translate-x-full"
			class="fixed inset-0 flex flex-col items-stretch gap-4 bg-gray-200 text-center"
			x-cloak
		>
			<svg
				@click="mobMenuShow = false"
				width="40"
				height="40"
				class="m-4 self-end"
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
						d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
						stroke="#1C274C"
						stroke-width="1.5"
						stroke-linecap="round"
					></path>
					<path
						d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
						stroke="#1C274C"
						stroke-width="1.5"
						stroke-linecap="round"
					></path>
				</g>
			</svg>
			<p class="text-2xl font-bold">{{ __('Διαμερίσματα Filidas') }}</p>
			<div class="my-4 flex flex-col items-stretch gap-2 text-2xl">
				<a
					href="{{ route('index') }}"
					class="@if (Route::is('index')) font-bold border bg-gray-300 @endif p-1"
				>{{ __('ΑΡΧΙΚΗ') }}</a>
				<a
					href="{{ route('apartments') }}"
					class="@if (Route::is('apartments')) font-bold border bg-gray-300 @endif p-1"
				>{{ __('ΤΑ ΔΙΑΜΕΡΙΣΜΑΤΑ') }}</a>
			</div>
			<div
				id="lang-switcher"
				class="mx-auto flex flex-row items-center gap-4 md:flex"
			>
				@foreach (LaravelLocalization::getSupportedLanguagesKeys() as $locale)
					<a href="{{ LaravelLocalization::getLocalizedURL($locale) }}"><img
							width="50"
							src="https://flagsapi.com/{{ strtoupper(config('locales.flags.' . $locale)) }}/shiny/64.png"
							alt="locale-{{ $locale }}"
							class="transition hover:scale-105 hover:drop-shadow-md"
						></a>
				@endforeach
			</div>
		</div>
	</div>
	<div
		id="lang-switcher"
		class="ml-auto hidden flex-row items-center gap-4 md:flex"
	>
		@foreach (LaravelLocalization::getSupportedLanguagesKeys() as $locale)
			<a href="{{ LaravelLocalization::getLocalizedURL($locale) }}"><img
					width="50"
					src="https://flagsapi.com/{{ strtoupper(config('locales.flags.' . $locale)) }}/shiny/64.png"
					alt="locale-{{ $locale }}"
					class="transition hover:scale-105 hover:drop-shadow-md"
				></a>
		@endforeach
	</div>
</div>
