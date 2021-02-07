<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'description'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'priority'=>$faker->numberBetween($min = 1, $max = 5)
    ];
});
