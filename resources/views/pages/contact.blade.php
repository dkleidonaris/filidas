@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'contact']])

{{-- @section('header', 'Hi') --}}

@section('title')
	{{ __('Αρχική') }}
@endsection

@section('body')
	<div>
		<div class="max-w-[1200px] mx-auto my-4 grid md:grid-cols">
			<div>
				<p>Contact</p>
			</div>
			<div></div>
		</div>
		<iframe
			id="map"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.337856417506!2d23.480385476516997!3d39.1649736716682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a6e76245b58199%3A0x36d35e9b2c45fe0f!2sFilidas%20apartments!5e0!3m2!1sel!2sgr!4v1742853984247!5m2!1sel!2sgr"
			height="450"
			style="border:0;"
			allowfullscreen=""
			loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"
			class="w-full"
		></iframe>
	</div>
@endsection
