<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Ensaladas"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Entradas"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Aperitivos"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Platos de fondo"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Postres"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Saludable"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Vegano"
        ]);
        
        DB::table("clasificaciones")->insert([
            "nombre_clasificacion"=>"Vegetariano"
        ]);
    }
}
