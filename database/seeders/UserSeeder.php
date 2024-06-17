<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table with test data.
     */
    public function run(): void
    {
        User::factory(10)->create();
    }
}
