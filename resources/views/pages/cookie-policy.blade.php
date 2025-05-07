@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true, 'breadcrumbs' => ['for' => 'cookie-policy']])

@section('header', __('Πολιτική cookies'))

@section('title', __('Πολιτική cookies'))

@section('body')
	<div class="mx-auto max-w-[1500px] rounded-2xl bg-white p-4 text-justify">
		<p class="mb-6 text-gray-700">
			@lang('cookie-policy.1')
		</p>
		<p class="mb-6 text-gray-700">
			@lang('cookie-policy.2')
		</p>

		@cookieconsentinfo
	</div>
@endsection
