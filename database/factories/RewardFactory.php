<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reward;
use Faker\Generator as Faker;
use App\User;

$factory->define(Reward::class, function (Faker $faker) {
    return [
        'points' => $faker->numberBetween($min = 1, $max = 1000),
        'id_user' => User::all()->random()->id,
    ];
});
