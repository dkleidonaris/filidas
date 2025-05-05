<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Customer;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $res = Reservation::factory()->create(['customer_id' => Customer::where('email', 'jimklid@gmail.com')->first()->id]);

        Payment::factory()->count(2)->create(['reservation_id' => $res->id, 'amount' => rand(1, $res->amount)]);
    }
}
