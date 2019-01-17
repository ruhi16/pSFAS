<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'vill'=> $faker->name,
        'post'=> $faker->name,
        'pstn'=> $faker->name,
        'dist'=> $faker->name,
        'pin' => $faker->name,
        'dise'=> $faker->name,
    ];
});
