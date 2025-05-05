@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true])

@section('title', __('Σύνδεση'))

@section('header', __('Σύνδεση'))

@section('body')
	<div class="mx-auto max-w-3xl">
		@livewire('pages.auth.login')
	</div>
@endsection
