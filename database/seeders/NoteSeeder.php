<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Seed the notes table with test data.
     */
    public function run(): void
    {
        Note::factory(20)->create();
    }
}
