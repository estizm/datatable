<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Data;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Data::class, function (Faker $faker) {
    return [
        'currency' => "AUDUSD",
        'type' => "BUY",
        'opened' => now(),
        'closed' => $faker->dateTime(),
        'open' => $faker->dateTime(),
        'close' => $faker->dateTime(),
        'total' => $faker->randomDigit(7), // password
    ];
});
