<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;

Route::localize(function () {
    Route::getLocalized('/', [PageController::class, 'index'])->name('index');
    Route::getLocalized('apartments', [PageController::class, 'apartments'])->name('apartments');
    Route::getLocalized('apartments/{slug}', [PageController::class, 'apartment'])->name('apartment');
    Route::getLocalized('contact', [PageController::class, 'contact'])->name('contact');
    Route::getLocalized('book', [PageController::class, 'book'])->name('book');

    Route::group(['middleware' => 'reservation_access_check', 'prefix' => 'reservation/{reservation}/{token}', 'as' => 'reservation.'], function () {
        Route::getLocalized('/', [ReservationController::class, 'show'])->name('show');
        Route::getLocalized('/receipt', [ReservationController::class, 'receipt'])->name('receipt');

        Route::postLocalized('payment', [ReservationController::class, 'payment'])->name('payment');
    });
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::view('/', 'pages.admin.index')->name('index');
    Route::group(['prefix' => 'payments', 'as' => 'payments.'], function () {
        Route::view('/', 'pages.admin.payments.index')->name('index');
    });
    Route::group(['prefix' => 'reservations', 'as' => 'reservations.'], function () {
        Route::view('/', 'pages.admin.reservations.index')->name('index');
        Route::view('/create', 'pages.admin.reservations.create')->name('create');
        Route::get('/{reservation}/show', function (Reservation $reservation) {
            return view('pages.admin.reservations.show', ['reservation' => $reservation]);
        })->name('show');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/api.php';
