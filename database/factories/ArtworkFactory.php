<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(nbWords: 3),
            'author' => $this->faker->name(),
            'keyword' => $this->faker->word(),
            'category' => $this->faker->randomElement([
                'Painting', 'Sculpture', 'Photography', 'Digital', 'Drawing',
            ]),
            'details' => $this->faker->text(maxNbChars: 200),
            'image' => 'default.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
