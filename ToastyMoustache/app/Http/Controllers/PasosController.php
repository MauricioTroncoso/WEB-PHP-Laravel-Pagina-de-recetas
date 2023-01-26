<?php

namespace App\Http\Controllers;

use App\Models\pasos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasosController extends Controller
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
            $datos['pasos']=pasos::get();     
            return view('Admin/Pasos.index',$datos);
        }
        else{
            $pasos=$request->get('buscar');
            $datos['pasos']=pasos::where('nombre_paso','LIKE','%'.$pasos.'%')->get();
            return view('Admin/Pasos.index',$datos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Pasos.create');
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
            pasos::insert($datos);
            return redirect('../Pasos')->with('mensaje','Paso creado con exito');
    
        }catch(\Throwable $e){
            return redirect('../Pasos')->with('mensaje','ERROR-No puedes ingresar campos vacios o repetidos');
   
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function show(pasos $pasos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasos=pasos::findOrFail($id);
        return view('Admin/pasos.edit',compact('pasos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
       
        try{
            $datos = request()->except('_token','_method');
            pasos::where('id','=',$id)->update($datos);
            return redirect('../Pasos')->with('mensaje','Paso editado con exito');

        }catch(\Throwable $e){
            return redirect('../Pasos')->with('mensaje','ERROR-No puedes ingresar campos vacios o repetidos');

        }
            
            
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pasos::destroy($id);
        return redirect('../Pasos')->with('mensaje','Paso eliminado con exito');
    }
}
