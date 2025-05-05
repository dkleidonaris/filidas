<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Bed extends Model
{
    /** @use HasFactory<\Database\Factories\BedFactory> */
    use HasFactory;

    use HasTranslations;

    public $timestamps = false;

    public $translatable = ['name'];

    protected $fillable = ['name'];

}
