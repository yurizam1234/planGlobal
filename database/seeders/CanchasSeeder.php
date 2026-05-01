<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanchasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('canchas')->insert([
                'nombre' => 'Cancha ' . $i,
                'id_deporte' => rand(1, 3),
                'ubicacion' => 'Zona ' . $i,
            ]);
        }
    }
}
