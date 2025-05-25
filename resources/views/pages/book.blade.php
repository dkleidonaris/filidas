@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'book']])

{{-- @section('header', 'Hi') --}}

@section('title')
	{{ __('Αρχική') }}
@endsection

@section('body')
	<div class="mx-auto flex max-w-3xl flex-col gap-4 p-2">
		<h2 class="text-lg">@lang('book-now.1'):</h2>
		<div
			x-data="{ show: false }"
			x-show="show"
			x-init="setTimeout(() => { show = true }, 500);"
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
		<p class="mb-4 text-lg">@lang('book-now.2') <a
				href="tel:+306937079820"
				class="text-blue-600 hover:underline"
			>+30 693 707 9820</a>
			@lang('book-now.3') <a href="{{route('contact')}}" class="text-blue-600 hover:bg-blue-200 rounded-md">@lang('εδώ')</a>.
		</p>
	</div>
@endsection
