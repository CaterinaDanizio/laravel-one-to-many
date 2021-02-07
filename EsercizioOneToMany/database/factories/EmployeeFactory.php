<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'dateOfBirth'=> $faker->dateTimeBetween($startDate = '-65 years', $endDate = '-18 years')
    ];
});
