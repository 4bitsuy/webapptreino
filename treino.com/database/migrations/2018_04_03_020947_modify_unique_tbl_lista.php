<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUniqueTblLista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('lista', function(Blueprint $table)
       {
           $table->dropUnique(['lisfecha','modu_id','gra_id']);
           $table->Unique(['lisfecha','modu_id','gra_id','alu_id']);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('guests', function(Blueprint $table)
     {
         //Put the index back when the migration is rolled back
        $table->dropUnique(['lisfecha','modu_id','gra_id','alu_id']);
        $table->unique(['lisfecha','modu_id','gra_id']);
     });
    }
}
