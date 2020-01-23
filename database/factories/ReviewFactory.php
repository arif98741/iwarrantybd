<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'designation' => ucfirst($faker->text(10)),
        'details' => ucfirst($faker->text(10)),
        'status' => $faker->randomElement([0, 1])

    ];
});