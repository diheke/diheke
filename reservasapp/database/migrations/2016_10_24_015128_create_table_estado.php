<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {       
        Schema::create('estados', function (Blueprint $table) {

            $table->increments('id');
            $table->string('descripcion', 300);
            $table->integer('tipo_estado')->unsigned();

            $table->foreign('tipo_estado')
                  ->references('id')->on('tipoestados')
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
        //
        Schema::drop('estados');
    }
}
