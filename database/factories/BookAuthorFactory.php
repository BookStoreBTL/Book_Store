<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookAuthor;
use Faker\Generator as Faker;

$factory->define(BookAuthor::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
