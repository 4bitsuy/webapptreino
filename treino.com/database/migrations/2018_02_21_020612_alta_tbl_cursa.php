<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblCursa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursa', function (Blueprint $table) {
            $table->integer('gra_id')->unsigned();
            $table->integer('modu_id')->unsigned();
            $table->integer('alu_id')->unsigned();
            $table->boolean('cur_estado');

            $table->foreign('gra_id')
              ->references('gra_id')
              ->on('grado')
              ->onDelete('cascade');

            $table->foreign('modu_id')
              ->references('modu_id')
              ->on('modulo')
              ->onDelete('cascade');

            $table->foreign('alu_id')
              ->references('alu_nro')
              ->on('alumno')
              ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursa');
    }
}
