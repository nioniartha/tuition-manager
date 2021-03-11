<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Officers;
use Faker\Generator as Faker;

$factory->define(Officers::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'nama_petugas' => $faker->name,
        'level' => 'officers',
    ];
});
