<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\car;
use Faker\Generator as Faker;

$factory->define(car::class, function (Faker $faker) {
    return [
        'brand_id' => rand(1,46),
        'registration' => (rand(10,99).'-'.chr(rand(65,90)).chr(rand(65,90)).'-'.rand(10,99)),
        'year_of_manufacture' => rand(1990,2022),
        'color' => $faker->colorName,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
