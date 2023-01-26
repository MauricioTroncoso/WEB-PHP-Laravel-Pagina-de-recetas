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
        Schema::create('recetas', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre_receta')->nullable(false)->unique(true);
            $table->string('descripcion')->nullable(false);
            $table->string('img')->nullable(false);
            $table->string('video')->nullable(false);
            $table->string('disponible')->nullable(false);
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
        Schema::dropIfExists('recetas');
    }
};
