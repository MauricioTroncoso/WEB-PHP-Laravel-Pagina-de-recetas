<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class logoutController extends Controller
{
    public function logout(request $request, Redirector $redirect){
        Auth::logout(); 
        $request->session()->invalidate();
        return redirect('/')->with('mensaje','Sesion cerrada satisfactoriamente');
    }
}
