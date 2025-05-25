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
            'name' => ['el' => 'Μπαλκόνι', 'en' => 'Balcony', 'it' => 'Balcone']
        ]);
        Feature::create([
            'key' => 'living_room_fireplace',
            'name' => ['el' => 'Σαλόνι με τζάκι', 'en' => 'Living room with fireplace', 'it' => 'Soggiorno con camino']
        ]);
        Feature::create([
            'key' => 'ac',
            'name' => ['el' => 'Κλιματισμός', 'en' => 'Air conditioning', 'it' => 'Aria condizionata']
        ]);
        Feature::create([
            'key' => 'wi-fi',
            'name' => ['el' => 'Wi-Fi', 'en' => 'Wi-Fi', 'it' => 'Wi-Fi']
        ]);
        Feature::create([
            'key' => '42_tv',
            'name' => ['el' => 'Τηλεόραση 42"', 'en' => '42" TV', 'it' => 'TV da 42"']
        ]);
        Feature::create([
            'key' => 'dining_table',
            'name' => ['el' => 'Τραπέζι φαγητού', 'en' => 'Dining table', 'it' => 'Tavolo da pranzo']
        ]);
        Feature::create([
            'key' => 'full_kitchen',
            'name' => ['el' => 'Πλήρως εξοπλισμένη κουζίνα', 'en' => 'Fully equipped kitchen', 'it' => 'Cucina completamente attrezzata']
        ]);
        Feature::create([
            'key' => 'fridge',
            'name' => ['el' => 'Ψυγείο', 'en' => 'Fridge', 'it' => 'Frigorifero']
        ]);
        Feature::create([
            'key' => 'cooker',
            'name' => ['el' => 'Κουζίνα μαγειρέματος', 'en' => 'Stove', 'it' => 'Cucina']
        ]);
        Feature::create([
            'key' => 'espresso_machine',
            'name' => ['el' => 'Μηχανή εσπρέσο', 'en' => 'Espresso machine', 'it' => 'Macchina da caffè espresso']
        ]);
        Feature::create([
            'key' => 'microwave',
            'name' => ['el' => 'Φούρνος μικροκυμάτων', 'en' => 'Microwave', 'it' => 'Microonde']
        ]);
        Feature::create([
            'key' => 'toaster',
            'name' => ['el' => 'Φρυγανιέρα', 'en' => 'Toaster', 'it' => 'Tostapane']
        ]);
        Feature::create([
            'key' => 'water_boiler',
            'name' => ['el' => 'Βραστήρας νερού', 'en' => 'Water boiler', 'it' => 'Bollitore']
        ]);
        Feature::create([
            'key' => 'cozy_bedroom',
            'name' => ['el' => 'Άνετο υπνοδωμάτιο', 'en' => 'Cozy bedroom', 'it' => 'Camera da letto accogliente']
        ]);
        Feature::create([
            'key' => 'bathroom',
            'name' => ['el' => 'Μπάνιο', 'en' => 'Bathroom', 'it' => 'Bagno']
        ]);
        Feature::create([
            'key' => 'washing_clothes',
            'name' => ['el' => 'Πλυντήριο ρούχων', 'en' => 'Washing machine', 'it' => 'Lavatrice']
        ]);

    }
}
