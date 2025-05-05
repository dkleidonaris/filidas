<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ReservationController;

Route::get('apartments/{id}/photos', function () {
    return response()->json('Hello');
});

Route::post('payments/handle', [ReservationController::class, 'payment']);

// Route::group([], function() {
//     Route::get('customers', [CustomerController::class, 'index']);
//     Route::get('countries', [CountryController::class, 'index']);
// });