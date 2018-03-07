<?php

use Faker\Generator as Faker;

$factory->define(App\Modulo::class, function (Faker $faker) {
    return [
      'modu_nombre' => $faker->randomElement($array = array ('Historia del fútbol 1',
                                                             'Historia del fútbol 2',
                                                             'Preparación Física 1',
                                                             'Preparación Física 2',
                                                             'Preparación Física 3',
                                                             'Arbitraje',
                                                             'Arbitraje avanzado',
                                                             'Pedagogía'
                                                           )),
      'modu_descripcion' => $faker->randomElement($array = array ('Descripción 1',
                                                             'Descripción 1',
                                                             'Descripción 2',
                                                             'Descripción 3',
                                                             'Descripción 4',
                                                             'Descripción 5',
                                                             'Descripción 6',
                                                             'Descripción 7'
                                                           )),
      'created_at' => date('Y-m-d H:m:s'),
      'updated_at' => date('Y-m-d H:m:s'),
    ];
});
