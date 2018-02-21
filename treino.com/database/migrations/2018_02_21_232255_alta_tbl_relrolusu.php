<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblRelrolusu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relrolusu', function (Blueprint $table) {
          $table->increments('rel_rol_usu_id');
          $table->integer('id_rol')->unsigned();
          $table->integer('id_usu')->unsigned();

          $table->foreign('id_rol')
            ->references('id')
            ->on('rol')
            ->onDelete('cascade');

          $table->foreign('id_usu')
            ->references('id')
            ->on('usuario')
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
        Schema::dropIfExists('relrolusu');
    }
}
