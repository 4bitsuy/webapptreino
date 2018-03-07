<?php

use Illuminate\Database\Seeder;

class RelGraModSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\RelGraMod::class, 100)->create()->each(function(App\RelGraMod $RelGraMod, $RelMod){
        $RelGra->grado()->attach([
          rand(1,5),
          rand(6,14),
          rand(15,20),
        ]);
        $RelMod->modulo()->attach([
          rand(1,5),
          rand(6,14),
          rand(15,20),
        ]);
      });
    }
}
