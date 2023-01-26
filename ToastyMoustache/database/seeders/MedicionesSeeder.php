<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("mediciones_ingredientes")->insert([
            "nombre_medicion"=>"gr"
        ]);
        DB::table("mediciones_ingredientes")->insert([
            "nombre_medicion"=>"ml"
        ]);
    }
}
