<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblRelTemaDoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reltemadoc', function (Blueprint $table) {
            $table->increments('reltemadoc_id');
            $table->integer('doc_id')->unsigned();
            $table->integer('tema_id')->unsigned();
            $table->timestamps();

            $table->foreign('doc_id')
              ->references('doc_nro')
              ->on('docente')
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
        Schema::dropIfExists('reltemadoc');
    }
}
