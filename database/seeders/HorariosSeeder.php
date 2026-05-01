<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('horarios')->insert([
        ['hora_inicio' => '08:00:00', 'hora_fin' => '09:00:00'],
        ['hora_inicio' => '09:00:00', 'hora_fin' => '10:00:00'],
        ['hora_inicio' => '10:00:00', 'hora_fin' => '11:00:00'],
    ]);
    }
}
