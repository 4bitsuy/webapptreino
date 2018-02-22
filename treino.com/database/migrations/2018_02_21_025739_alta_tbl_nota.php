<?php
/*Modifico RS */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->integer('alu_id')->unsigned();
            $table->integer('modu_id')->unsigned();
            $table->integer('nota');

            $table->foreign('alu_id')
              ->references('alu_nro')
              ->on('alumno')
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
        Schema::dropIfExists('nota');
    }
}
