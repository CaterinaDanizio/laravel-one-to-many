<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Typology;
use Faker\Generator as Faker;

$factory->define(Typology::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'description'=>$faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
