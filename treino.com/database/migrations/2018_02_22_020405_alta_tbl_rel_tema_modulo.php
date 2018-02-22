<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblRelTemaModulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reltemamodulo', function (Blueprint $table) {
            $table->integer('tema_id')->unsigned();
            $table->integer('modu_id')->unsigned();
            $table->timestamps();

            $table->foreign('modu_id')
              ->references('modu_id')
              ->on('modulo')
              ->onDelete('cascade');

            $table->foreign('tema_id')
              ->references('tema_id')
              ->on('tema')
              ->onDelete('cascade');

            $table->primary(['tema_id','modu_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reltemamodulo');
    }
}
