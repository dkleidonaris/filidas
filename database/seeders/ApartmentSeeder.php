<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Feature;
use App\Models\Apartment;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allPhotos = Storage::disk('public')->files('gallery/apartments');

        $apartment = Apartment::create([
            'name' =>
                [
                    'el' => 'Ισόγειο Διαμέρισμα (A1)',
                    'en' => 'Ground Floor Apartment (A1)',
                    'it' => 'Appartamento al Piano Terra (A1)'
                ],
            'slug' => 'a1',
            'adult_capacity' => 5,
            'child_capacity' => 0
        ]);
        $apartment = Apartment::create([
            'name' =>
                [
                    'el' => 'Διαμέρισμα 1ου Ορόφου (Β1)',
                    'en' => '1st floor Apartment (B1)',
                    'it' => 'Appartamento al 1° piano (B1)'
                ],
            'slug' => 'b1',
            'adult_capacity' => 5,
            'child_capacity' => 0
        ]);
        $apartment = Apartment::create([
            'name' =>
                [
                    'el' => 'Διαμέρισμα 1ου Ορόφου (Β2)',
                    'en' => '1st floor Apartment (B2)',
                    'it' => 'Appartamento al 1° piano (B2)'
                ],
            'slug' => 'b2',
            'adult_capacity' => 4,
            'child_capacity' => 0
        ]);
        $apartment = Apartment::create([
            'name' =>
                [
                    'el' => 'Διαμέρισμα 2ου Ορόφου (Γ1)',
                    'en' => '2nd floor Apartment (G1)',
                    'it' => 'Appartamento al 2° piano (G1)'
                ],
            'slug' => 'g1',
            'adult_capacity' => 4,
            'child_capacity' => 0
        ]);
        $apartment = Apartment::create([
            'name' =>
                [
                    'el' => 'Διαμέρισμα 2ου Ορόφου (Γ2)',
                    'en' => '2nd floor Apartment (G2)',
                    'it' => 'Appartamento al 2° piano (G2)'
                ],
            'slug' => 'g2',
            'adult_capacity' => 4,
            'child_capacity' => 0
        ]);

        $features = Feature::all()->pluck(['id'])->toArray();

        Apartment::all()->map(function ($apartment) use ($allPhotos, $features) {
            array_map(function ($item) use ($apartment) {
                if (Str::startsWith(basename($item), $apartment->slug)) {
                    $apartment->photos()->create(['path' => "/" . $item]);
                }
            }, $allPhotos);

            $apartment->features()->attach($features);
        });







    }
}
