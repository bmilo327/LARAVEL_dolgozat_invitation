<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Illuminate\Support\enum_value;

/**
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->first()?->id ?? User::factory(),
            'event_id'=>Event::inRandomOrder()->first()?->id ?? Event::factory(),
            'status'=>fake()->word()
        ];
    }
}
