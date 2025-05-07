<?php

use App\Models\Apartment;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push(__('Αρχική'), route('index'));
});

// Apartments
Breadcrumbs::for('apartments', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Τα διαμερίσματα'), route('apartments'));
});

// Apartment
Breadcrumbs::for('apartment', function (BreadcrumbTrail $trail, Apartment $apartment) {
    $trail->parent('apartments');
    $trail->push($apartment->name, route('apartment', ['slug' => $apartment->slug]));
});

// Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Επικοινωνία'), route('contact'));
});

// Book
Breadcrumbs::for('book', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Κάντε κράτηση'), route('book'));
});

// Payment Methods
Breadcrumbs::for('payment-methods', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Τρόποι πληρωμής'), route('payment-methods'));
});

// Terms of use
Breadcrumbs::for('terms', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Όροι χρήσης'), route('terms'));
});

// Privacy policy
Breadcrumbs::for('privacy-policy', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Πολιτική απορρήτου'), route('privacy-policy'));
});

// Cookie policy
Breadcrumbs::for('cookie-policy', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push(__('Πολιτική cookies'), route('cookie-policy'));
});