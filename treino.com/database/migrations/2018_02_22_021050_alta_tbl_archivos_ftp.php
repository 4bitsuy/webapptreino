<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblArchivosFtp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivosftp', function (Blueprint $table) {
            $table->increments('arch_id');
            $table->integer('tema_id')->unsigned();
            $table->string('arch_ruta');
            $table->timestamps();

            $table->foreign('tema_id')
              ->references('tema_id')
              ->on('tema')
              ->onDelete('cascade');

          //para mi tendria que ir pero no le gusta, hay que ver como hacerlo por eso lo comento
            $table->unique(['arch_id','tema_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivosftp');
    }
}
