<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\sermons;
use Faker\Generator as Faker;

$factory->define(sermons::class, function (Faker $faker) {
    return [        
        'id' => $faker->id,
        'title' => $faker->title,
        'description' => $faker->description   
    ];
});
