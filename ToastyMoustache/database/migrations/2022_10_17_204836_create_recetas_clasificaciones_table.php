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
        Schema::create('recetas_clasificaciones', function(Blueprint $table){
            $table->bigInteger('id_receta')->unsigned();
            $table->bigInteger('id_clasificacion')->unsigned();   
            $table->timestamps();
            $table->primary(['id_receta','id_clasificacion']);
        });
        Schema::table('recetas_clasificaciones', function($table){
            $table->foreign('id_receta')->references('id')->on('recetas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_clasificacion')->references('id')->on('clasificaciones')->onUpdate('cascade')->onDelete('cascade');});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas_clasificaciones');
    }
};
