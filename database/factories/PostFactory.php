<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use App\Location;
use App\User;

$factory->define(Post::class, function (Faker $faker) {

    return  [
        'path' => "https://postadmin.s3.eu-west-3.amazonaws.com/baleal_1583160555.jpg",
        'caption' => $faker->text($maxNbChars = 20),
        'rating' => $faker->numberBetween($min = 1,$max = 5),
        'image_size' => $faker->randomDigit,
        'id_location' => Location::all()->random()->id,
        'id_user' => User::all()->random()->id,
        'created_at' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now', $timezone = null),
    ];

});
