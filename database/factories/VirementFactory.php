<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Virement>
 */
class VirementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "motif"         => fake()->sentence(),
            "montant"       => fake()->randomFloat(2, 10, 5000),
            "client_id"     =>Client::inRandomOrder()->first()->id
        ];
    }
}
