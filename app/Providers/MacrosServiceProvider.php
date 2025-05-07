<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class MacrosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Str::macro('gr_strtoupper', function (string $value) {
            $replacements = [
                'ά' => 'α',
                'έ' => 'ε',
                'ή' => 'η',
                'ί' => 'ι',
                'ϊ' => 'ι',
                'ΐ' => 'ι',
                'ό' => 'ο',
                'ύ' => 'υ',
                'ϋ' => 'υ',
                'ΰ' => 'υ',
                'ώ' => 'ω',
                'Ά' => 'Α',
                'Έ' => 'Ε',
                'Ή' => 'Η',
                'Ί' => 'Ι',
                'Ό' => 'Ο',
                'Ύ' => 'Υ',
                'Ώ' => 'Ω'
            ];

            return mb_strtoupper(strtr($value, $replacements), 'UTF-8');
        });
    }
}
