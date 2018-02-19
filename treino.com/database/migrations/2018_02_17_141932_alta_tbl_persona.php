<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('per_ci');
            $table->string('per_pri_nombre');
            $table->string('per_seg_nombre');
            $table->string('per_pri_apellido');
            $table->string('per_seg_apellido');
            $table->date('per_fechanac');
            $table->string('per_email');
            $table->string('per_usuingreso');
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
        Schema::dropIfExists('persona');
    }
}
