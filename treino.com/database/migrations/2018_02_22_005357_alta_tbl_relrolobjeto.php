<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblRelrolobjeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relrolobjeto', function (Blueprint $table) {
            $table->increments('relrolobj_id');
            $table->integer('rol_id')->unsigned();
            $table->integer('obj_id');
            $table->timestamps();

            $table->foreign('rol_id')
              ->references('id')
              ->on('rol')
              ->onDelete('cascade');
/*
            $table->foreign('obj_id')
              ->references('obj_id')
              ->on('objetos')
              ->onDelete('cascade');
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relrolobjeto');
    }
}
