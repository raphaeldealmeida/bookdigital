<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [        
        'code'=>$faker->number,        
        'name'=>$faker->name,
        'description'=>$faker->paragraph,
        'accountcode'=>$faker->title,
        'unitprice'=>$faker->price
    ];
});
