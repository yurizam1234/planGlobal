<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        $faker = Faker::create();

    for ($i = 0; $i < 20; $i++) {
        DB::table('clientes')->insert([
            'nombre' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'telefono' => $faker->phoneNumber(),
        ]);
    }
    }
}

