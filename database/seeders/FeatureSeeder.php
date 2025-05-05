<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'key' => 'balcony',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'living_room_fireplace',
            'name' => ['el' => 'Σαλόνι με τζάκι']
        ]);
        Feature::create([
            'key' => 'ac',
            'name' => ['el' => 'Κλιματισμός']
        ]);
        Feature::create([
            'key' => 'wi-fi',
            'name' => ['el' => 'Wi-Fi']
        ]);
        Feature::create([
            'key' => '42_tv',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'dining_table',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'full_kitchen',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'fridge',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'cooker',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'espresso_machine',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'microwave',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'toaster',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'water_boiler',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'cozy_bedroom',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'bathroom',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
        Feature::create([
            'key' => 'washing_clothes',
            'name' => ['el' => 'Μπαλκόνι']
        ]);
    }
}
