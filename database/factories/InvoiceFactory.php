<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invoice;
use App\Models\Package;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'package_id' => Package::all()->random(),
        'email' => $faker->safeEmail,
        'contact' => $faker->phoneNumber,
        'comment' => $faker->text(50),
        'status' => $faker->randomElement(['completed', 'pending'])
    ];
});