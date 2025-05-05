<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    /** @use HasFactory<\Database\Factories\ApartmentFactory> */
    use HasFactory;

    use HasTranslations;

    public $timestamps = false;

    public $translatable = ['name', 'description'];

    public function photos(): HasMany {
        return $this->hasMany(Photo::class);
    }

    public function features(): BelongsToMany {
        return $this->belongsToMany(Feature::class);
    }
}
