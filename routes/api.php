<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ReservationController;
use App\Http\Resources\PhotoResource;
use App\Models\Apartment;

Route::get('apartments/{apartment:slug}/photos', function (Apartment $apartment) {
    return PhotoResource::collection($apartment->photos);
});

Route::post('payments/handle', [ReservationController::class, 'payment']);