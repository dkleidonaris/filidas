<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CustomerController;


Route::get('apartments/{id}/photos', function() {
    return response()->json('Hello');
});

// Route::group([], function() {
//     Route::get('customers', [CustomerController::class, 'index']);
//     Route::get('countries', [CountryController::class, 'index']);
// });