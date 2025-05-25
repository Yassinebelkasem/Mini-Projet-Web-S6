<?php

namespace Database\Factories;

use App\Models\Voituer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VoituerFactory extends Factory
{
    protected $model = Voituer::class;

    public function definition(): array
    {
        return [
            'marque' => $this->faker->randomElement(['Peugeot', 'Renault', 'Volkswagen', 'Toyota', 'BMW']),
            'modele' => $this->faker->word(),
            'version' => $this->faker->optional()->word(),
            'annee' => $this->faker->year(),
            'carburant' => $this->faker->randomElement(['Essence', 'Diesel', 'Hybride', 'Électrique']),
            'transmission' => $this->faker->randomElement(['Manuelle', 'Automatique']),
            'kilometrage' => $this->faker->numberBetween(0, 200000),
            'moteur' => $this->faker->optional()->randomFloat(1, 1.0, 4.0),
            'prix' => $this->faker->numberBetween(50000, 500000),
            'neuve' => $this->faker->boolean(30), // 30% de chance qu'elle soit neuve
            'localisation' => $this->faker->city(),
            'description' => $this->faker->optional()->sentence(10),
        ];
    }
}