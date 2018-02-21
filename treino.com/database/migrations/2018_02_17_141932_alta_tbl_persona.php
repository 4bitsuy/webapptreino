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
            $table->integer('per_ci')->primary();
            $table->string('per_pri_nombre');
            $table->string('per_seg_nombre')->nullable();
            $table->string('per_pri_apellido');
            $table->string('per_seg_apellido')->nullable();
            $table->date('per_fechanac')->nullable();
            $table->string('per_email')->nullable()->unique();
            $table->string('per_usuingreso')->nullable();
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
