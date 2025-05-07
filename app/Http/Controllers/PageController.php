<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function apartments()
    {
        return view('pages.apartments');
    }

    public function apartment($slug)
    {
        $apartment = (Apartment::where('slug', $slug)->first());

        if (!$apartment) {
            abort(404);
        }
        return view('pages.apartment', ['apartment' => $apartment]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function book()
    {
        return view('pages.book');
    }

    public function my_reservation(){
        return view('pages.reservations.my-reservation');
    }

    public function payment_methods(){
        return view('pages.payment-methods');
    }

    public function terms(){
        return view('pages.terms');
    }

    public function privacy_policy(){
        return view('pages.privacy-policy');
    }
}
