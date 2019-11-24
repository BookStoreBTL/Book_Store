<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $faker1 = \Faker\Factory::create();
    $faker1->addProvider(new \Bezhanov\Faker\Provider\Educator($faker1));

    return [
        'name' => $faker1->course
    ];
});
