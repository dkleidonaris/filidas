@extends('layouts.guest', ['navPosition' => 'sticky', 'menuWithBg' => true])

@section('header', __('Η κράτησή μου'))

@section('title', __('Η κράτησή μου'))

@section('body')
	@livewire('reservations.show', ['reservation' => $reservation])
@endsection
