<?php

use App\Models\Subscription;
use App\Models\Package;
use App\Models\Subscriber;
use Faker\Generator as Faker;
use Carbon\Carbon;


$factory->define(Subscription::class, function (Faker $faker) {
    $carbon = new Carbon;
    return [

        'package_id' => Package::all()->random(),
        'subscriber_id' => Subscriber::all()->random(),
        'comment' => $faker->text(50),
        'expire' => $carbon->addDays(365)->format('Y-m-d'),
        'status' => $faker->randomElement(['approved', 'pending', 'rejected'])
    ];
});