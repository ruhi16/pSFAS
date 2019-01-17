<?php

use Faker\Generator as Faker;

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'vill'=> $faker->address,
        'post'=> $faker->word,
        'pstn'=> $faker->city,
        'dist'=> $faker->state,
        'pin' => $faker->postcode,
        'dise'=> $faker->randomNumber,
    ];
});
