<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Trader;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Trader::factory(5)->create();
        Event::factory(5)->create();
        Ticket::factory(5)->create();

    /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    */
    }
}
