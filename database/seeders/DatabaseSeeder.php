<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Voituer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
 //Voituer::factory(10)->create();

        Voituer::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
       ]);
    }
// public function run(): void
// {
//     $this->call([
//         VoituerSeeder::class,
//     ]);
// }
}
