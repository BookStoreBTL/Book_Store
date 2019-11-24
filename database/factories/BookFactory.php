<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $name = $faker->sentence;
    return [
        'name' => $name,
        'description' => $faker->paragraph,
        'release_year' => $faker->numberBetween($min = 1970, $max = 2019),
        'page' => $faker->numberBetween($min = 100, $max = 1000),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5.00, $max = 50.00),
        'quantity_in_stock' => $faker->numberBetween($min = 0, $max = null),
        'language_id' => $faker->numberBetween($min = 1, $max = 10),
        'publisher_id' => $faker->numberBetween($min = 1, $max = 10),
        'img' => $name.'.png'
    ];
});
