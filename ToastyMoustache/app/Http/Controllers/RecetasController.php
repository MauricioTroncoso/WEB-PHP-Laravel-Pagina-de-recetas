<?php

namespace App\Http\Controllers;

use App\Models\recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetasController extends Controller
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
            $datos['recetas']=DB::select("SELECT * FROM recetas");
            //$datos['recetas']=recetas::get();     
            return view('Admin/recetas.index',$datos);
        }
        else{
            $recetas=$request->get('buscar');
            $datos['recetas']=DB::select("SELECT * FROM recetas WHERE recetas.nombre_receta LIKE '%".$recetas."%'");
            return view('Admin/recetas.index',$datos);
        }
        
    }
    public function buscar(){
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['seleccion']=DB::select("SELECT * FROM seleccion");
        return view('Admin/recetas.create',$datos);
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
            recetas::insert($datos);
            return redirect('../recetas')->with('mensaje','Receta creada con exito');
     
        }catch(\Throwable $e){
            return redirect('../recetas')->with('mensaje','ERROR-No puedes ingresar campos vacios o repetidos');

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function show(recetas $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seleccion=DB::select("SELECT * FROM seleccion");
        $recetas=recetas::findOrFail($id);
        return view('Admin/recetas.edit',compact('recetas','seleccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{       
            $datos = request()->except('_token','_method');
            recetas::where('id','=',$id)->update($datos);
            return redirect('../recetas')->with('mensaje','Receta editada con exito');

        }catch(\Throwable $e){
            return redirect('../recetas')->with('mensaje','ERROR-No puedes ingresar campos vacios o repetidos');
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        recetas::destroy($id);
        return redirect('../recetas')->with('mensaje','Receta Eliminada con exito');
    }
}
