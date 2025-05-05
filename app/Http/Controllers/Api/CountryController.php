<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;

class CountryController extends Controller
{
    public function index()
    {
        return CountryResource::collection(Country::all());
    }
}
