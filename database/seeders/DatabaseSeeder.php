<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'dkleidonaris@gmail.com',
            'password' => Hash::make('DnTt$@FILIDAS00')
        ]);

        $this->call([
            FeatureSeeder::class,
            BedSeeder::class,
            PhotoSeeder::class,
            ApartmentSeeder::class,
            CountrySeeder::class,
            CustomerSeeder::class,
            ReservationSeeder::class,
            PaymentSeeder::class
        ]);
    }
}
