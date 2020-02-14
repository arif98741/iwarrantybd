<?php


use App\Models\Vendor;
use Faker\Generator as Faker;

$factory->define(Vendor::class, function (Faker $faker) {
    return [
        'name' => 'Ariful Islam',
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'location' => $faker->address,
        'status' => $faker->randomElement(['approved', 'rejected'])
    ];
});