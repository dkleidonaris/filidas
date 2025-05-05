<?php

namespace Database\Seeders;

use App\Imports\CountriesImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new CountriesImport, storage_path('app/seeders/countries.csv'));
    }
}
