<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Translation\HasLocalePreference;

class Customer extends Model implements HasLocalePreference
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function preferredLocale(): string
    {
        if ($this->country->code == 'gr') {
            return 'el';
        } elseif ($this->country->code == 'it') {
            return 'it';
        } else {
            return 'en';
        }
    }
}
