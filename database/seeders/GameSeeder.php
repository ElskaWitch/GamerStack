<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Seed the games table with test data.
     */
    public function run(): void
    {
        Game::factory(10)->create();
    }
}
