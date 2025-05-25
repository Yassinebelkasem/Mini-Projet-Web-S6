<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Voituer;


class VoituerSeeder extends Seeder
{
    /**
     * Exécuter le seed de la base de données.
     */
    public function run()
    {

         Voituer::factory()->count(27)->create(); 
        // Voituer::create([
        //     'marque' => 'Peugeot',
        //     'modele' => '208',
        //     'version' => 'GT Line',
        //     'annee' => 2022,
        //     'carburant' => 'Diesel',
        //     'transmission' => 'Manuelle',
        //     'kilometrage' => 25000,
        //     'moteur' => 1.5,
        //     'prix' => 145000,
        //     'neuve' => false,
        //     'localisation' => 'Rabat',
        //     'description' => "Très bon état, carnet d'entretien à jour.",
        // ]);
    }
}