<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Whitecube\LaravelCookieConsent\Consent;
use Whitecube\LaravelCookieConsent\Facades\Cookies;
use Whitecube\LaravelCookieConsent\CookiesServiceProvider as ServiceProvider;

class CookiesServiceProvider extends ServiceProvider
{
    /**
     * Define the cookies users should be aware of.
     */
    protected function registerCookies(): void
    {
        // Register Laravel's base cookies under the "required" cookies section:
        // Cookies::essentials()
        //     ->session()
        //     ->csrf();

        // Register all Analytics cookies at once using one single shorthand method:
        // Cookies::analytics()
        //    ->google(
        //         id: config('cookieconsent.google_analytics.id'),
        //         anonymizeIp: config('cookieconsent.google_analytics.anonymize_ip')
        //    );

        // Register custom cookies under the pre-existing "optional" category:
        // Cookies::optional()
        //     ->name('darkmode_enabled')
        //     ->description('This cookie helps us remember your preferences regarding the interface\'s brightness.')
        //     ->duration(120)
        //     ->accepted(fn(Consent $consent, MyDarkmode $darkmode) => $consent->cookie(value: $darkmode->getDefaultValue()));

        Cookies::essentials()
            ->name('laravel_session')
            ->description('session')
            ->duration(2 * 60);

        Cookies::essentials()
            ->name('XSRF-TOKEN')
            ->description('csrf')
            ->duration(2 * 60);

        Cookies::analytics()
            ->name('_ga')
            ->description('_ga')
            ->duration(2 * 365 * 24 * 60)
            ->accepted(function (Consent $consent) {
                $consent->script("<script>window.dataLayer = window.dataLayer || [], window.dataLayer.push({ event: 'ga_consent_granted' });</script>");
            });

        Cookies::analytics()
            ->name('_ga_' . Str::after(config('analytics.ga_id'), 'G-'))
            ->description('_ga_ID')
            ->duration(2 * 365 * 24 * 60);

        Cookies::analytics()
            ->name('_gid')
            ->description('_gid')
            ->duration(24 * 60);

        Cookies::analytics()
            ->name('_gat')
            ->description('_gat')
            ->duration(90 * 24 * 60);
    }
}
