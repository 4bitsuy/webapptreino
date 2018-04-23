<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltaTblArchivosFTP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('archivosftp', function ($table) {
        $table->string('arch_nombre',200)->after('tema_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('archivosftp', function (Blueprint $table) {
        $table->dropColumn(['arch_nombre']);
      });
    }
}
