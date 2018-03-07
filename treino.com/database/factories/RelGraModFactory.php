<?php

use Faker\Generator as Faker;

$factory->define(App\RelGraMod::class, function (Faker $faker) {
    return [
      'gra_id' => rand(1,30),
      'modu_id' => rand(1,30),
    ];
});
