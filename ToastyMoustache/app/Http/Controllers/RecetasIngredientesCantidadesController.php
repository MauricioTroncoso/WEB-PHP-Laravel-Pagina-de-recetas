<?php

namespace App\Http\Controllers;

use App\Models\recetas_ingredientes_cantidades;
use Illuminate\Http\Request;

class RecetasIngredientesCantidadesController extends Controller
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
        try
        {
        $datos = request()->except('_token');
        recetas_ingredientes_cantidades::insert($datos);
        return redirect('../recetas')->with('mensaje','Vinculo creado con exito');
    }
    catch(\Throwable $e)
    {
        return redirect('../recetas')->with('mensaje','ERROR-Es posible que intentaras ligar un dato inexistente o repetido');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recetas_ingredientes_cantidades  $recetas_ingredientes_cantidades
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_ingredientes_cantidades $recetas_ingredientes_cantidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recetas_ingredientes_cantidades  $recetas_ingredientes_cantidades
     * @return \Illuminate\Http\Response
     */
    public function edit(recetas_ingredientes_cantidades $recetas_ingredientes_cantidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recetas_ingredientes_cantidades  $recetas_ingredientes_cantidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recetas_ingredientes_cantidades $recetas_ingredientes_cantidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recetas_ingredientes_cantidades  $recetas_ingredientes_cantidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(recetas_ingredientes_cantidades $recetas_ingredientes_cantidades)
    {
        //
    }
}
