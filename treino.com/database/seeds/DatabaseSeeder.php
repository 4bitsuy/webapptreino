<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('GradosSeeder'::class);
        $this->call('ModulosSeeder'::class);
        //$this->call('RelGraModSeeder'::class); //falla contraint
    }
}
