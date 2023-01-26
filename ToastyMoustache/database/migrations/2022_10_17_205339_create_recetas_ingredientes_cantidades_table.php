<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas_ingredientes_cantidades', function(Blueprint $table){
            $table->bigInteger('id_receta')->unsigned();
            $table->bigInteger('id_ingrediente')->unsigned();
            $table->string('cantidad')->nullable(false);
            $table->bigInteger('id_medicion')->unsigned();    
            $table->timestamps();
            $table->primary(['id_receta','id_ingrediente']);
        });
        Schema::table('recetas_ingredientes_cantidades', function($table){
            $table->foreign('id_receta')->references('id')->on('recetas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_ingrediente')->references('id')->on('ingredientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_medicion')->references('id')->on('mediciones_ingredientes')->onUpdate('cascade')->onDelete('cascade');});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas_ingredientes_cantidades');
    }
};
