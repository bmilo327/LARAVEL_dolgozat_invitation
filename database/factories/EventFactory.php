<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Trader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'time'=>fake()->dateTime(),
            'address'=>fake()->address(),
            'trader_id'=>Trader::all()->random()->id,
        ];
    }
}
