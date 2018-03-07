<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ModulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*  $faker = Faker::create();
      for ($i=0; $i < 8; $i++) {
        \DB::table('grado')->insert(array(
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
               'updated_at' => date('Y-m-d H:m:s')
        ));
      }*/


    factory(App\Modulo::class,20)->create();

    }
}
