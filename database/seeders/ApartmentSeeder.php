<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Feature;
use App\Models\Apartment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apartment = Apartment::create([
            'name' =>
                ['el' => 'Διαμέρισμα 2ου Ορόφου (Γ1)'],
            'slug' => 'g2',
            'adult_capacity' => 5,
            'child_capacity' => 0
        ]);

        $apartment->photos()->create(['path' => '/storage/gallery/apartments/29a92d1f43ea26e4b3a95c05f9973d97.jpg']);
        $apartment->photos()->create(['path' => '/storage/gallery/apartments/236c0b968eca21c387ef2f9cf95fbfe0.jpg']);
        $apartment->photos()->create(['path' => '/storage/gallery/apartments/f1d23a3fa319bb5f90b357a6665eeb32.jpg']);

        $features = Feature::all()->pluck(['id'])->toArray();
        $apartment->features()->attach($features);

    }
}
