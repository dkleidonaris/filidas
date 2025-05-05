<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{
    public function index() {
        return CustomerResource::collection(Customer::all());
    }
}
