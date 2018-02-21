<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblRelgramod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relgramod', function (Blueprint $table) {
            $table->integer('gra_id')->unsigned();
            $table->integer('modu_id')->unsigned();
            $table->integer('lista')->nullable();

            $table->foreign('gra_id')
              ->references('gra_nro')
              ->on('grado')
              ->onDelete('cascade');

            $table->foreign('modu_id')
              ->references('modu_id')
              ->on('modulo')
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
        Schema::dropIfExists('relgramod');
    }
}
