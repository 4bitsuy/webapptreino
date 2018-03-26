<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFechasCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('cursa', function ($table) {
        $table->date('cur_fch_ini')->nullable();
        $table->date('cur_fch_fin')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('cursa', function (Blueprint $table) {
        $table->dropColumn(['cur_fch_ini', 'cur_fch_fin']);
      });
    }
}
