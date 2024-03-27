<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

     /**
        * Run the migrations.
        * @return void
        */
       public function up()
    {

        Schema::Create('tramite',function(Blueprint $tabla){
            $tabla->id();
            $tabla->string('Nombre');
            $tabla->integer('Expiracion');
            $tabla->double('Monto');
            $tabla->integer('IdArea');
        });
    }

 
    /**
     * Reverse the migrations.
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('tramites');
    }
};