<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/**
 * Route::get   | Consultar
 * Route::post  | Guardar
 * Route::Delete| eliminar
 * Route::put   | Actualizar
 * 
 * 
 */



/** 
 * aqui llamamos en a cada metodo  que se creo en el controlador PageController 
 * y se le asigna a cada ruta correspondiente
 Route::get('/',  [PageController::class, 'home'])->name('home');

 Route::get('blog', [PageController::class, 'blog'])->name('blog');

 Route::get('blog/{slug}',  [PageController::class, 'post'])->name('post');
*/
// se crea una agupacion con el controlador general PageController para asi solo llamar 
// el metodo que se necesita.
Route::controller(PageController::class)->group(function(){

    Route::get('/',              'home')->name('home');
    Route::get('blog',           'blog')->name('blog');
    Route::get('blog/{slug}',    'post')->name('post');
});