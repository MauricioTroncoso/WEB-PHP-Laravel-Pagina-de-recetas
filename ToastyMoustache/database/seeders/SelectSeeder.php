<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("seleccion")->insert([
            "nombre_seleccion"=>"Si"
        ]);
        DB::table("seleccion")->insert([
            "nombre_seleccion"=>"No"
        ]);
    }
}
