<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Photo extends Model
{
    /** @use HasFactory<\Database\Factories\PhotoFactory> */
    use HasFactory;

    use HasTranslations;
    public $timestamps = false;

    public $translatable = ['title', 'description'];

    public function apartment(): BelongsTo {
        return $this->belongsTo(Apartment::class);
    }
}
