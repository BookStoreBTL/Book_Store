<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publisher;
use Faker\Generator as Faker;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElements([
            'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh', 
            'Nhà xuất bản chính trị quốc gia', 
            'Nhà xuất bản giáo dục', 
            'Nhà xuất bản Hội Nhà văn', 
            'Nhà xuất bản Tư pháp', 
            'Nhà xuất bản thông tin và truyền thông', 
            'Nhà xuất bản lao động',
            'Nhà xuất bản giao thông vận tải'
            ])[0]
    ];
});
