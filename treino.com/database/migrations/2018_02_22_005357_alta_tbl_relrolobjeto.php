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
            $table->integer('rol_id')->unsigned();
            $table->string('obj_panel_id');
            $table->string('obj_evento_id');
            $table->timestamps();

            $table->foreign('rol_id')
              ->references('id')
              ->on('rol')
              ->onDelete('cascade');

            $table->foreign('obj_panel_id')
              ->references('obj_panel_id')
              ->on('objetos')
              ->onDelete('cascade');

            $table->foreign('obj_evento_id')
              ->references('obj_evento_id')
              ->on('objetos')
              ->onDelete('cascade');

            $table->primary(array('rol_id','obj_panel_id','obj_evento_id'));
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
