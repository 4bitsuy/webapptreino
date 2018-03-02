<?php
/*Modifico RS */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblLista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista', function (Blueprint $table) {
            $table->integer('alu_id')->unsigned();
            $table->date('lisfecha');
            $table->integer('modu_id')->unsigned();
            $table->integer('gra_id')->unsigned();
            $table->boolean('asistencia');

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

            $table->unique(['lisfecha','modu_id','gra_id'])

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
        Schema::dropIfExists('lista');
    }
}
