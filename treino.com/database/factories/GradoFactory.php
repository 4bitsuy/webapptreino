<?php

use Faker\Generator as Faker;

$factory->define(App\Grado::class, function (Faker $faker) {
    return [
      'gra_nro' => $faker->numberBetween($min = 1, $max = 6),
      'gra_estado' => 'Abierto',
      'created_at' => date('Y-m-d H:m:s'),
      'updated_at' => date('Y-m-d H:m:s'),
    ];
});
