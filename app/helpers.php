<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (!function_exists('localized_signed_url')) {
    function localized_signed_url(string $locale): ?string
    {
        $currentRoute = Route::current();
        if (!$currentRoute)
            return null;

        $routeName = $currentRoute->getName();
        if (!$routeName)
            return null;

        $parameters = $currentRoute->parameters();

        // Temporarily switch locale to generate correct signed path
        $previousLocale = app()->getLocale();
        app()->setLocale($locale);

        // This generates the signed URL with locale prefix in path
        $signedUrl = URL::signedRoute($routeName, $parameters);

        // Restore locale
        app()->setLocale($previousLocale);

        return $signedUrl;
    }
}
