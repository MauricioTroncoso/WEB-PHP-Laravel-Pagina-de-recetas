<?php
use App\Models\recetas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasificacionesController;
use App\Http\Controllers\ClasificacionesIngredientesController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\PasosController;
use App\Http\Controllers\RecetasClasificacionesController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\RecetasIngredientesCantidadesController;
use App\Http\Controllers\RecetasIngredientesMedicionesController;
use App\Http\Controllers\RecetasPasosController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisorRecetasController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//vista usuario
Route::get('/', function () {
    return view('Admin/inicio.index');
});
//proceso de login
Route::get('/log', function () {
    return view('welcome');
})->middleware('guest');

Route::post('/User/create', function () {
    return view('Admin/User.create');
});
Route::post('/User/store', function (Request $request) {
        try{
            User::insert(['name'=>$request->name,'email' => $request->email,'password' => Hash::make($request->password)]);
        return redirect('/log')->with('mensaje','Usuario Creado con Exito');

        }catch(\Throwable $e){
            return redirect('/log')->with('mensaje','ERROR-Ya existe una cuenta ligada a ese correo electronico');
        }
        });

//Vinculo de recetas y pasos
Route::post('/RecetasPasos/create/{id}', function($id){
    $recetas=recetas::findOrFail($id);
    $nombre_receta=$recetas->nombre_receta;
    $pasos=DB::select("SELECT id,pasos.nombre_paso FROM pasos WHERE pasos.nombre_paso LIKE '%".$nombre_receta."%'");
    return view('Admin/recetas_pasos.create', compact('recetas','pasos'));
});

//Vinculo de Recetas y Clasificaciones
Route::post('/RecetasClasificaciones/create/{id}', function($id){
    $recetas=recetas::findOrFail($id);
    $clasificaciones=DB::select("SELECT * FROM clasificaciones ORDER BY nombre_clasificacion ASC");
    return view('Admin/recetas_clasificaciones.create', compact('recetas','clasificaciones'));
});

//Vinculo Receta e Ingredientes
Route::post('/RecetasIngredientesCantidades/create/{id}', function($id){
    $recetas=recetas::findOrFail($id);
    $ingredientes=DB::select("SELECT * FROM ingredientes ORDER BY nombre_ingrediente ASC");
    $mediciones=DB::select("SELECT * FROM mediciones_ingredientes");
    return view('Admin/recetas_ingredientes_cantidades.create', compact('recetas','ingredientes','mediciones'));
});

Route::get('/inicio', function(){
    return view("Admin/inicio.index");
});

Route::get('/recetario', function(Request $request){
    $busqueda=$request->get('buscar');
    $selector=$request->get('select');
  
    if( $busqueda=="" && $selector==""){
        $s=DB::select("SELECT * FROM clasificaciones");
        $recetas=DB::select("SELECT * FROM recetas WHERE recetas.disponible ='Si'");    
        return view('Admin/inicio.recetario', compact('s','recetas'));
    }
    if($selector!="" && $busqueda==""){
        
        $recetas=DB::select("SELECT * FROM recetas INNER JOIN recetas_clasificaciones ON recetas_clasificaciones.id_receta=recetas.id INNER JOIN clasificaciones ON clasificaciones.id=recetas_clasificaciones.id_clasificacion WHERE clasificaciones.id=".$selector."");
        $s=DB::select("SELECT * FROM clasificaciones");
        return view('Admin/inicio.recetario',compact('recetas','s'));
    }
    if($busqueda!="" && $selector==""){
        $receta=$request->get('buscar');
        $recetas=DB::select("SELECT * FROM recetas WHERE recetas.disponible ='Si' AND recetas.nombre_receta LIKE '%".$receta."%'");
        $s=DB::select("SELECT * FROM clasificaciones");
        return view('Admin/inicio.recetario',compact('s','recetas'));
    }
    if($busqueda!="" && $selector!=""){
        $receta=$request->get('buscar');
        $selector=$request->get('select');
        $recetas=DB::select("SELECT * FROM recetas INNER JOIN recetas_clasificaciones ON recetas_clasificaciones.id_receta=recetas.id INNER JOIN clasificaciones ON clasificaciones.id = recetas_clasificaciones.id_clasificacion WHERE clasificaciones.id = ".$selector." AND recetas.nombre_receta LIKE '%".$receta."%'");
        $s=DB::select("SELECT * FROM clasificaciones");
        return view('Admin/inicio.recetario',compact('s','recetas'));
    }

    return view('Admin/inicio.recetario');
});


//Routas de los Controllers
Route::post('logout',[logoutController::class,'logout']);
//Route::post('User',[UserController::class]);
Route::post('login',[loginController::class,'login']);

//Rutas de Administrador
Route::resource('recetas',RecetasController::class)->middleware('admin');
Route::resource('Ingredientes',IngredientesController::class)->middleware('admin');
Route::resource('Clasificaciones',ClasificacionesController::class)->middleware('admin');
Route::resource('ClasificacionesIngredientes',ClasificacionesIngredientesController::class)->middleware('admin');
Route::resource('Pasos',PasosController::class)->middleware('admin');
Route::resource('RecetasClasificaciones',RecetasClasificacionesController::class)->middleware('admin');
Route::resource('RecetasIngredientesCantidades',RecetasIngredientesCantidadesController::class)->middleware('admin');
Route::resource('RecetasPasos',RecetasPasosController::class)->middleware('admin');
Route::resource('Visor',VisorRecetasController::class);
