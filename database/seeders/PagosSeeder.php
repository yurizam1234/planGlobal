<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table('pagos')->insert([
                'id_reserva' => rand(1, 30),
                'monto' => rand(50, 200),
                'fecha_pago' => $faker->date(),
                'metodo_pago' => 'Efectivo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
