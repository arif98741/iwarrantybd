<?php

use App\Models\Center;
use Faker\Generator as Faker;

$factory->define(Center::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'location' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'date' => $faker->date('Y-m-d'),
        'time' => $faker->time('H:m:s'),
        'status' => $faker->randomElement(['approved', 'rejected'])
    ];
});