<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'console' => $this->faker->randomElement(['PlayStation', 'Xbox', 'Switch', 'PC', 'Mobile']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
