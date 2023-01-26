<?php

namespace App\Http\Controllers;

use App\Models\ingredientes;
use Illuminate\Http\Request;

class IngredientesController extends Controller
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
            $datos['ingredientes']=ingredientes::get();     
            return view('Admin/Ingredientes.index',$datos);
        }
        else{
            $ingredientes=$request->get('buscar');
            $datos['ingredientes']=ingredientes::where('nombre_ingrediente','LIKE','%'.$ingredientes.'%')->get();
            return view('Admin/Ingredientes.index',$datos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Ingredientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 
            
       try{
        
        $datos = request()->except('_token');
        ingredientes::insert($datos);
        return redirect('../Ingredientes')->with('mensaje','Ingrediente agregado con exito');

       
 
       } catch(\Throwable $e){
        return redirect('../Ingredientes')->with('mensaje','ERROR-No puedes ingresar campos vacios');
       }      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function show(ingredientes $ingredientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredientes=ingredientes::findOrFail($id);
        return view('Admin/Ingredientes.edit',compact('ingredientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
            
        try{
            $datos = request()->except('_token','_method');
        ingredientes::where('id','=',$id)->update($datos);
        return redirect('../Ingredientes')->with('mensaje','Ingrediente editado con exito');
 
        }catch(\Throwable $e){
            return redirect('../Ingredientes')->with('mensaje','ERROR-No puedes ingresar campos vacios');
        }
                   
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredientes  $ingredientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ingredientes::destroy($id);
        return redirect('../Ingredientes')->with('mensaje','Ingrediente eliminado con exito');
    }
}
