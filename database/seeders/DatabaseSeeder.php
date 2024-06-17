<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            NoteSeeder::class,
            GameSeeder::class,
        ]);
    }
}
