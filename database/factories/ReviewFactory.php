<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'book_id' => $faker->numberBetween($min = 1, $max = 1000),
        'title' => $faker->words(7, true)
    ];
});
