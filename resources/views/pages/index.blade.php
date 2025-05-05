@extends('layouts.guest', ['navPosition' => 'fixed', 'menuWithBg' => false])

{{-- @section('header', 'Hi') --}}

@section('title', __('Αρχική'))

@section('body')
	<div
    id="hero"
		class="bg-cover bg-fixed"
		style="background-image: url('{{ asset('img/home_bg.jpg') }}');"
	>
		<div class="flex flex-col h-screen backdrop-blur-[2px]">
            <div class="mt-64 md:my-60 ml-8 md:ml-40 flex flex-col gap-4 tracking-[5px]">
                <h2 x-data="{show: false}" x-show="show" x-init="setTimeout(() => {show= true}, 500);" x-transition class="text-2xl md:text-4xl text-yellow-400" x-cloak>{{__('ΔΙΑΜΕΡΙΣΜΑΤΑ')}}</h2>
                <h1 x-data="{show: false}" x-show="show" x-init="setTimeout(() => {show= true}, 700);" x-transition class="text-3xl md:text-7xl font-bold drop-shadow-lg text-white" x-cloak>{{__('Filidas Apartments')}}</h1>
				<h3 x-data="{show: false}" x-show="show" x-init="setTimeout(() => {show= true}, 1000);" x-transition class="text-2xl md:text-4xl font-bold drop-shadow-lg text-white" x-cloak>{{__('Σκιάθος')}}</h1>
            </div>
			<div x-data="{show: false}" x-show="show" x-init="setTimeout(() => {show= true}, 1200);" x-transition class="mt-auto w-full" x-cloak>
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
	<div class="my-4 h-[3000px] bg-gray-600">

	</div>
@endsection
