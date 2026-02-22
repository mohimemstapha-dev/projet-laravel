<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agence;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"       => fake()->name(),
            "prenom"    => fake()->lastName(),
            "age"       =>fake()->numberBetween(18,70),
            "solde"     =>fake()->randomFloat(2, 0, 100000),
            "agence_id" =>Agence::inRandomOrder()->first()->id
        ];
    }
}
