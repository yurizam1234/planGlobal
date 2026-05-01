<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            EstadosSeeder::class,
            DeportesSeeder::class,
            ClientesSeeder::class,
            UsersSeeder::class,
            HorariosSeeder::class,
            CanchasSeeder::class,
            PreciosSeeder::class,
            ReservasSeeder::class,
            PagosSeeder::class,
        ]);
    }
}