<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Matricule' => $this->faker->unique()->regexify('[A-Z0-9]{20}'),
            'Prénom' => $this->faker->firstName,
            'Nom' => $this->faker->lastName,
            'Adresse' => $this->faker->address,
            'Email' => $this->faker->unique()->safeEmail,
            'DateNaissance' => $this->faker->date(),
            'LieuNaissance' => $this->faker->city,
            'Pays' => $this->faker->country,
            'Nationalite' => $this->faker->country,
            'TelEleve' => $this->faker->phoneNumber,
            'NomPere' => $this->faker->lastName,
            'TelPere' => $this->faker->phoneNumber,
            'NomMere' => $this->faker->lastName,
            'TelMere' => $this->faker->phoneNumber,
            'saisipar' => $this->faker->name,
        ];
    }
}
