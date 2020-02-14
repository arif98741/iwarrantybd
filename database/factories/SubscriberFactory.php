<?php

use App\Models\Subscriber;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Subscriber::class, function (Faker $faker) {

    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123'),
        'address' => $faker->address,
        'mobile' => '01750840217',
        'status' => $faker->randomElement(['approved', 'cancelled']),
        'remember_token' => Str::random(10),
    ];
});