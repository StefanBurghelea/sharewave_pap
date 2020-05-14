<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text($maxNbChars = 100),
        'id_post' => Post::all()->random()->id,
        'id_user' => User::all()->random()->id,
        'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now', $timezone = null),
    ];
});
