<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'location_name' => $faker->country,
        'beach_name' => 'Beach ' . $faker->streetName,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
    ];
});
