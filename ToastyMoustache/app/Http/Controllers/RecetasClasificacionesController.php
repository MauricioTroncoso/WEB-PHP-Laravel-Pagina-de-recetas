<?php

namespace App\Http\Controllers;

use App\Models\recetas_clasificaciones;
use Illuminate\Http\Request;

class RecetasClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try{
            $datos = request()->except('_token');
        recetas_clasificaciones::insert($datos);
        return redirect('../recetas')->with('mensaje','Vinculo creado con exito');
        }catch(\Throwable $e){
            return redirect('../recetas')->with('mensaje','ERROR-No puedes ligar elementos nulos o repetidos');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recetas_clasificaciones  $recetas_clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_clasificaciones $recetas_clasificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recetas_clasificaciones  $recetas_clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(recetas_clasificaciones $recetas_clasificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recetas_clasificaciones  $recetas_clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recetas_clasificaciones $recetas_clasificaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recetas_clasificaciones  $recetas_clasificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(recetas_clasificaciones $recetas_clasificaciones)
    {
        //
    }
}
