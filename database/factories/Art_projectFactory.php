<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Art_project>
 */
class Art_projectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'budget' => $this->faker->randomNumber(4),
            'description' => $this->faker->sentence,
            'category' => $this->faker->word,
            'state' => $this->faker->randomElement(['en_attente', 'en_cours', 'termine']),
            'partner_id' => Partner::inRandomOrder()->first()->id

        ];
    }
}
