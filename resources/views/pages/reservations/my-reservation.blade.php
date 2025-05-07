@extends('layouts.protected-guest', ['navPosition' => 'sticky', 'menuWithBg' => true])

@section('header', __('Η κράτησή μου'))

@section('title', __('Η κράτησή μου'))

@section('body')
	@livewire('reservations.my-reservation')
@endsection
