<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string("nombre", 10);
            $table->year("año");
            $table->integer("ciclo")-> length(1);

            $table->integer("idprofesor")->unsigned ();
            $table->foreign("idprofesor")->references ("id")->on("profesor");
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
        Schema::dropIfExists('cursos');
    }
}
