<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'img' => $name.'.png'
    ];
});
