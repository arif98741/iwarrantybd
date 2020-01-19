<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'title' => strtoupper($faker->randomElement(['Standard', 'Business', 'Premium'])),
        'price' => $faker->randomElement([19, 39, 59]),
        'project' => $faker->randomDigit . ' projects',
        'storage' => $faker->randomElement(['20mb Storage', '100mb Storage', '200mb Storage'])
    ];
});