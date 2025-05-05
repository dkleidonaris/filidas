<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkout_date = $this->faker->date();
        $amount = $this->faker->numberBetween(100, 1000);

        return [
            'access_token' => Str::random(40),
            'checkin_date' => $this->faker->date(max: $checkout_date),
            'checkout_date' => $checkout_date,
            'amount' => $amount,
            'deposit' => $this->faker->numberBetween(50, $amount),
            'adult_no' => $this->faker->numberBetween(1, 6),
            'child_no' => $this->faker->numberBetween(0, 6),
            'status' => 'draft'
        ];
    }
}
