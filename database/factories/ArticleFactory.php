<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(),
        'body' => $faker->paragraph(),
        'published_at' => Carbon::today(),
    ];
});
