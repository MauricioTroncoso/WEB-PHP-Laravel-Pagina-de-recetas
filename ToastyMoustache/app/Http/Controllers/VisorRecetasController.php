<?php

namespace App\Http\Controllers;

use App\Models\VisorRecetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisorRecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin/inicio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisorRecetas  $visorRecetas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$nombre_receta=DB::select("SELECT nombre_receta FROM recetas WHERE recetas.id =".$id."");
        //$video=DB::select("SELECT video FROM recetas  WHERE recetas.id =".$id."");
       
            $recetas=DB::select("SELECT * FROM recetas WHERE recetas.id=".$id."");
            $ICM=DB::select("SELECT ingredientes.nombre_ingrediente, recetas_ingredientes_cantidades.cantidad,mediciones_ingredientes.nombre_medicion FROM recetas_ingredientes_cantidades INNER JOIN ingredientes ON ingredientes.id=recetas_ingredientes_cantidades.id_ingrediente INNER JOIN mediciones_ingredientes ON mediciones_ingredientes.id = recetas_ingredientes_cantidades.id_medicion  WHERE recetas_ingredientes_cantidades.id_receta =".$id."" );
            $pasos=DB::select("SELECT pasos.nombre_paso, pasos.descripcion_paso, pasos.enlace FROM recetas_pasos INNER JOIN pasos ON pasos.id=recetas_pasos.id_paso WHERE recetas_pasos.id_receta=".$id."");
            return view("Admin/inicio.visorReceta", compact("recetas","ICM","pasos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisorRecetas  $visorRecetas
     * @return \Illuminate\Http\Response
     */
    public function edit(VisorRecetas $visorRecetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisorRecetas  $visorRecetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisorRecetas $visorRecetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisorRecetas  $visorRecetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisorRecetas $visorRecetas)
    {
        //
    }
}
