@extends('layouts.empty')

@section('title', __('Αποδείξεις'))

@section('body')
    <div class="container mx-auto px-4 py-6 print:bg-white print:text-black">

        <img
            src="{{ asset('img/filidas_logo.png') }}"
            class="mx-auto w-[200px]"
            alt=""
        >
        {{-- Print button (only visible on screen) --}}
        <div class="mb-6 flex items-center justify-between print:hidden">
            <h1 class="text-2xl font-bold">{{ __('Στοιχεία κράτησης') }}</h1>
            <button
                onclick="window.print()"
                class="rounded-lg bg-blue-600 px-4 py-2 text-white shadow hover:bg-blue-700"
            >
                {{ __('Εκτύπωση') }}
            </button>
        </div>

        {{-- Reservation Info --}}
        <div
            class="mb-8 rounded-xl border bg-white p-6 shadow-md print:mb-8 print:border-none print:shadow-none">
            <div class="grid grid-cols-2 gap-4 text-sm text-gray-700">
                <div><strong>{{ __('Αριθμός κράτησης') }}:</strong>
                    {{ $reservation->id }}</div>
                <div><strong>{{ __('Ημ/νία κράτησης') }}:</strong>
                    {{ $reservation->created_at->format('Y-m-d') }}
                </div>
                <div><strong>Check-in:</strong>
                    {{ ucfirst($reservation->checkin_date->format('l j F Y')) }}
                </div>
                <div><strong>Check-out:</strong>
                    {{ ucfirst($reservation->checkout_date->format('l j F Y')) }}
                </div>
                <div><strong>{{ __('Ον/μο πελάτη') }}:</strong>
                    {{ $reservation->customer->last_name }}
                    {{ $reservation->customer->first_name }}</div>
                <div><strong>Email:</strong> {{ $reservation->customer->email }}
                </div>
                <div><strong>{{ __('Κατάσταση') }}:</strong>
                    {{ __($reservation->status) }}</div>
                <div><strong>{{ __('Συνολικό ποσό') }}:</strong>
                    {{ number_format($reservation->amount, 2) }} €</div>
            </div>
        </div>

        {{-- Transactions Table --}}
        <div
            class="rounded-xl border bg-white p-6 shadow-md print:mb-8 print:border-none print:shadow-none">
            <h2 class="mb-4 text-xl font-semibold text-gray-700">
                {{ __('Επιτυχείς συναλλαγές') }}
            </h2>

            @if ($reservation->successful_payments->count() > 0)
                <div class="overflow-x-auto">
                    <table
                        class="w-full border-collapse text-left text-sm text-gray-700"
                    >
                        <thead>
                            <tr class="border-b border-gray-300 bg-gray-100">
                                <th class="px-3 py-2">
                                    {{ __('Αναγνωριστικό συναλλαγής') }}</th>
                                <th class="px-3 py-2">{{ __('Ημερομηνία') }}</th>
                                <th class="px-3 py-2">{{ __('Ποσό') }}</th>
                                <th class="px-3 py-2">{{ __('Μέθοδος πληρωμής') }}
                                </th>
                                <th class="px-3 py-2">{{ __('Αρ. αναφοράς') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservation->successful_payments as $payment)
                                <tr class="border-b border-gray-200">
                                    <td class="px-3 py-2">{{ $payment->tx_id }}
                                    </td>
                                    <td class="px-3 py-2">
                                        {{ $payment->date->format('d/m/Y H:i T') }}
                                    </td>
                                    <td class="px-3 py-2">
                                        {{ number_format($payment->amount, 2) }} €
                                    </td>
                                    <td class="px-3 py-2">
                                        {{ ucfirst($payment->payment_method ?? 'N/A') }}
                                    </td>
                                    <td class="px-3 py-2">{{ $payment->order_id }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-sm text-gray-500">
                    {{ __('no-successful-reservations-found') }}</p>
            @endif
        </div>
    </div>

    {{-- Tailwind print utilities --}}
    <style>
        @media print {
            .print\:hidden {
                display: none !important;
            }

            .print\:mb-8 {
                margin-bottom: 2rem !important;
            }

            .print\:shadow-none {
                box-shadow: none !important;
            }

            .print\:border-none {
                border: none !important;
            }

            .container {
                max-width: 100% !important;
                padding: 0 !important;
            }

            /* Hide layout header and footer */
            header,
            footer,
            #header,
            #footer,
            .site-header,
            .site-footer {
                display: none !important;
            }
        }
    </style>

@endsection
