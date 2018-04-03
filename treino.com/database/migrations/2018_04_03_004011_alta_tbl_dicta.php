<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblDicta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dicta', function (Blueprint $table) {
            $table->increments('dicta_id');
            $table->integer('gra_id')->unsigned();
            $table->integer('modu_id')->unsigned();
            $table->integer('doc_id')->unsigned();
            $table->date('dicta_fch_ini')->nullable();
            $table->date('dicta_fch_fin')->nullable();
            $table->boolean('dicta_estado');

            $table->foreign('gra_id')
              ->references('gra_id')
              ->on('grado')
              ->onDelete('cascade');

            $table->foreign('modu_id')
              ->references('modu_id')
              ->on('modulo')
              ->onDelete('cascade');

            $table->foreign('doc_id')
              ->references('doc_nro')
              ->on('docente')
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
        Schema::dropIfExists('dicta');
    }
}
