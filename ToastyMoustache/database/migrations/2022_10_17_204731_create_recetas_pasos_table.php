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
        Schema::create('recetas_pasos', function(Blueprint $table){
            $table->bigInteger('id_receta')->unsigned();
            $table->bigInteger('id_paso')->unsigned();
            $table->primary(['id_receta','id_paso']);
            $table->timestamps();
        });
        Schema::table('recetas_pasos', function($table){
            $table->foreign('id_receta')->references('id')->on('recetas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_paso')->references('id')->on('pasos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas_pasos');
    }
};
