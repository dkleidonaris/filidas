@extends('layouts.app')

@section('title', 'Διαχείριση κράτησης')
@section('header', 'Διαχείριση κράτησης')

@section('body')

@livewire('admin.reservations.show', [$reservation])

@endsection
