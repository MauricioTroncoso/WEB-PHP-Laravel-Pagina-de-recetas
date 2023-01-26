<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        return view('User.create');
    }

    public function create()
    {
        try{
            return view('User.create');    
        }catch(\Throwable $e){
            return redirect('/log')->with('mensaje','ERROR-Ya existe una cuenta ligada a ese correo electronico');

        }
        
    }
    public function store(Request $request)
    {
        try{
            $datos = request()->except('_token');
            user::insert($datos);
            return redirect('/log')->with('mensaje','Usuario Creado con Exito');
        }catch(Exception $e){
            return redirect('/log')->with('mensaje','ERROR-Ya existe una cuenta ligada a ese correo electronico');
        }
        
    }
    
}
