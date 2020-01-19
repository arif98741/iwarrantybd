<?php

use App\Models\Subscription;
use App\Models\Package;
use App\Models\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'package_id' => Package::all()->random(),
        'subscriber_id' => Subscriber::all()->random(),
        'email' => $faker->safeEmail,
        'contact' => $faker->phoneNumber,
        'comment' => $faker->text(50),
        'status' => $faker->randomElement(['completed', 'pending'])
    ];
});