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
        //napis heslo a uyivatele

        $koleje = [
            ["nazev" => "Nebelvír","cesta_obrazek" => "nebelvir.png","barva" => "red"],
            ["nazev" => "Zmijozel","cesta_obrazek" => "zmijozel.png","barva" => "green"],
            ["nazev" => "Havraspár","cesta_obrazek" => "havraspar.png","barva" => "blue"],
            ["nazev" => "Mrzimor","cesta_obrazek" => "mrzimor.png","barva" => "#daa520"],
        ];

        foreach($koleje as $kolej)
        {
            //::insert vklada do db
            //::create -> poue vytvari v PHP, pak nutno "vlozit" do db pomoci ->save()

            $kolejVDatabazi = College::create($kolej);
            $kolejVDatabazi->body = rand(15, 200);
            $kolejVDatabazi->save();
        }

    }
}
