<?php

use Livewire\Livewire;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize']
    ],
    function () {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/', [PageController::class, 'index'])->name('index');
        Route::get(LaravelLocalization::transRoute('routes.apartments'), [PageController::class, 'apartments'])->name('apartments');
        Route::get(LaravelLocalization::transRoute('routes.apartment'), [PageController::class, 'apartment'])->name('apartment');
        Route::get(LaravelLocalization::transRoute('routes.contact'), [PageController::class, 'contact'])->name('contact');
        Route::get(LaravelLocalization::transRoute('routes.book'), [PageController::class, 'book'])->name('book');
        Route::get(LaravelLocalization::transRoute('routes.my-reservation'), [PageController::class, 'my_reservation'])->name('my-reservation');

        Route::get(LaravelLocalization::transRoute('routes.payment-methods'), [PageController::class, 'payment_methods'])->name('payment-methods');
        Route::get(LaravelLocalization::transRoute('routes.terms'), [PageController::class, 'terms'])->middleware('localeViewPath')->name('terms');
        Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), [PageController::class, 'privacy_policy'])->middleware('localeViewPath')->name('privacy-policy');
        Route::get(LaravelLocalization::transRoute('routes.cookie-policy'), [PageController::class, 'cookie_policy'])->name('cookie-policy');


        Route::group(['middleware' => 'reservation_access_check', 'prefix' => 'reservation/{reservation}/{token}', 'as' => 'reservation.'], function () {
            Route::get('/', [ReservationController::class, 'show'])->name('show');
            Route::get('/receipt', [ReservationController::class, 'receipt'])->name('receipt');
            Route::post('payment', [ReservationController::class, 'payment'])->name('payment');
        });
    }
);

// Route::localize(function () {
//     Route::getLocalized('/', [PageController::class, 'index'])->name('index');
//     Route::getLocalized('apartments', [PageController::class, 'apartments'])->name('apartments');
//     Route::getLocalized('apartments/{slug}', [PageController::class, 'apartment'])->name('apartment');
//     Route::getLocalized('contact', [PageController::class, 'contact'])->name('contact');
//     Route::getLocalized('book', [PageController::class, 'book'])->name('book');
//     Route::getLocalized('/my-reservation', [PageController::class, 'my_reservation'])->name('my-reservation');

//     Route::group(['middleware' => 'reservation_access_check', 'prefix' => 'reservation/{reservation}/{token}', 'as' => 'reservation.'], function () {
//         Route::getLocalized('/', [ReservationController::class, 'show'])->name('show');
//         Route::getLocalized('/receipt', [ReservationController::class, 'receipt'])->name('receipt');

//         Route::postLocalized('payment', [ReservationController::class, 'payment'])->name('payment');
//     });
// });

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
