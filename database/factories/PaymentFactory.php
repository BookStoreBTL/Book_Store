<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'user_id' => $faker-> numberBetween($min = 1, $max = 100),
        'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1.00, $max = 200.00),
        'payment_date' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
    ];
});
