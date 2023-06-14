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

Route::get('/',  [PageController::class,'home'])->name('home');

Route::get('blog', [PageController::class,'blog'])->name('blog');

Route::get('blog/{slug}',  [PageController::class,'post'])->name('post');
