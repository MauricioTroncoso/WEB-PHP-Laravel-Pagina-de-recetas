<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
class loginController extends Controller
{
    public function login(Request $request){
        $datos=request()->only('name','password');
            if(Auth::attempt($datos)){
                request()->session()->regenerate();
                return redirect('../inicio');
            }
            else{
                return redirect('/log',)->with('mensaje','Usuario y/o Contraseña incorrectas');
            }
    }
}
