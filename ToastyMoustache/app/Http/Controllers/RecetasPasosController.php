<?php

namespace App\Http\Controllers;

use App\Models\recetas_pasos;
use App\Models\recetas;
use App\Models\pasos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetasPasosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=$request->get('buscar');
        if( $busqueda==""){
            $datos['recetas_pasos']= DB::select('SELECT recetas.nombre_receta,pasos.nombre_paso,pasos.descripcion_paso,pasos.enlace FROM recetas_pasos INNER JOIN recetas ON recetas.id = recetas_pasos.id_receta INNER JOIN pasos ON pasos.id = recetas_pasos.id_paso');    
            return view('Admin/recetas_pasos.index',$datos);
        }
        else{
            $buscar=$request->get('buscar');
            $datos['recetas_pasos']=DB::select("SELECT recetas.nombre_receta,pasos.nombre_paso,pasos.descripcion_paso,pasos.enlace FROM recetas_pasos INNER JOIN recetas ON recetas.id = recetas_pasos.id_receta INNER JOIN pasos ON pasos.id = recetas_pasos.id_paso WHERE recetas.nombre_receta LIKE '%".$buscar."%'");
            return view('Admin/recetas_pasos.index',$datos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            recetas_pasos::insert($datos);
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
     * @param  \App\Models\recetas_pasos  $recetas_pasos
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_pasos $recetas_pasos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recetas_pasos  $recetas_pasos
     * @return \Illuminate\Http\Response
     */
    public function edit(recetas_pasos $recetas_pasos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recetas_pasos  $recetas_pasos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recetas_pasos $recetas_pasos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recetas_pasos  $recetas_pasos
     * @return \Illuminate\Http\Response
     */
    public function destroy(recetas_pasos $recetas_pasos)
    {
        //
    }
}
