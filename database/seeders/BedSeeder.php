<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bed::create(["name" => ["el" => "Καναπές κρεβάτι"]]);
        Bed::create(["name" => ["el" => "Υπέρδιπλο Κρεβάτι"]]);

    }
}
