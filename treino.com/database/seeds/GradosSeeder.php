<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GradosSeeder extends Seeder
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
               'gra_nro' => $faker->numberBetween($min = 1, $max = 6),
               'gra_estado' => 'Abierto',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));
      }*/

      factory(App\Grado::class,20)->create();

    }
}
