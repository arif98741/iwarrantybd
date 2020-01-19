<?php

use App\Models\Claim;
use App\Models\Subscriber;
use Faker\Generator as Faker;

$factory->define(Claim::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'subscriber_id' => Subscriber::all()->random(),
        'phone_name' => $faker->phoneNumber,
        'address' => $faker->address,
        'model' => rand(1, 10),
        'imei' => $faker->imei,
        'details' => $faker->text(100),
        'problem_pattern' => $faker->text(50),
        'more_details' => $faker->text(150),
    ];
});