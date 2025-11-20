<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'customer_id' => 1, // we can't assume more customers exist yet
            'number_of_people' => $this->faker->numberBetween(1, 10), // the 10 person limit is uniform across all validations
            'accommodation' => $this->faker->randomElement(['tent', 'camper', 'caravan']),
            'has_dog' => $this->faker->boolean(), // either 1 or 0. which is true or false
            'extra_tents' => $this->faker->numberBetween(0, 5),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(), // this date can be before the start date which is bad. but this is supposed to be fallback data.
        ];
    }
}
