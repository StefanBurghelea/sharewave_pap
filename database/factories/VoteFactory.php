<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vote;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Vote::class, function (Faker $faker) {
    return [
        'vote_direction' => $faker->numberBetween($min = 0,$max = 1),
        'id_post' => Post::all()->random()->id,
        'id_user' => User::all()->random()->id,
    ];
});
