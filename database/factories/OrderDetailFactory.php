<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'order_id' => $faker->numberBetween($min = 1, $max = 1000),
        'book_id' => $faker->numberBetween($min = 1, $max = 1000),
        'quantity_order' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
