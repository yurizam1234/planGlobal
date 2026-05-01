<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    $faker = Faker::create();

    for ($i = 0; $i < 30; $i++) {
        DB::table('reservas')->insert([
            'id_cliente' => rand(1, 20),
            'id_cancha' => rand(1, 5),
            'id_horario' => rand(1, 3),
            'id_estado' => rand(1, 3),
            'fecha' => $faker->date(),
            'id_user' => rand(1, 11),
        ]);
    }
}
}
