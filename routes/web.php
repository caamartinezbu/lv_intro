<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Route::get   | Consultar
 * Route::post  | Guardar
 * Route::Delete| eliminar
 * Route::put   | Actualizar
 * 
 * 
*/

Route::get('/', function () { /**si vamos a la raiz obtendremos una vista llamada welcome */
    return view('home');
});

Route::get('/blog/{slug}', function ($slug) { /***/
    //consulta a base de datos
    return $slug;
});

Route::get('buscar', function (Request $request) { /***/
    //consulta a base de datos http://127.0.0.1:8000/buscar?query=php
    return $request->all();
});