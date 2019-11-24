<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $order_date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'order_date' => $order_date,
        'shipped_date' => $faker->dateTimeBetween($startDate = $order_date, $endDate = 'now', $timezone = null),
        'status' => 'Done'
    ];
});
