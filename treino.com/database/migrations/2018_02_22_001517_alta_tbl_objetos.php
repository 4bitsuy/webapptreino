<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblObjetos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos', function (Blueprint $table) {
            $table->string('obj_panel_id')->unique();
            $table->string('obj_evento_id')->unique();
            $table->string('desc_panel')->nullable();
            $table->string('desc_evento')->nullable();
            $table->timestamps();
            $table->primary(['obj_panel_id','obj_evento_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetos');
    }
}
