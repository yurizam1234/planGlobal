<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
public function run(): void
{
    $faker = Faker::create();

    // usuario fijo
    DB::table('users')->insert([
        'name' => 'Admin Principal',
        'email' => 'admin@test.com',
        'password' => Hash::make('123456'),
        'id_rol' => 1,
    ]);

    // usuarios aleatorios
    for ($i = 0; $i < 10; $i++) {
        DB::table('users')->insert([
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make('123456'),
            'id_rol' => rand(1, 2),
        ]);
    }
}
}
