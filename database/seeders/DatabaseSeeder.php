<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        College::insert([
            "nazev" => "Nebelvír",
            "cesta_obrazek" => "nebelvir.jpg",
            "barva" => "red",
        ]);
    }
}
