<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRelTemaAlu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reltemaalu', function (Blueprint $table) {
          $table->increments('reltemaalu_id');
          $table->integer('alu_id')->unsigned();
          $table->integer('tema_id')->unsigned();
          $table->timestamps();

          $table->foreign('alu_id')
            ->references('alu_nro')
            ->on('alumno')
            ->onDelete('cascade');

          $table->foreign('tema_id')
            ->references('tema_id')
            ->on('tema')
            ->onDelete('cascade');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reltemaalu');
    }
}
