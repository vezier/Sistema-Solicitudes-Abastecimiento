<?php
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\OficioController;
use Illuminate\Support\Facades\Route;
Route::view('/', 'index');
//Establecimientos
Route::get('establecimientos', [EstablecimientoController::class,'index']); //Mostrar todo
Route::get('establecimientos/create', [EstablecimientoController::class,'create']);  //Formularo crear
Route::post('establecimientos', [EstablecimientoController::class,'store']); //Guardar creado
Route::get('establecimientos/{id}', [EstablecimientoController::class,'show']); 
Route::get('establecimientos/{id}/edit', [EstablecimientoController::class,'edit']); //Formulario Actualizar
Route::put('establecimientos/{id}', [EstablecimientoController::class,'update']); //Actualizar
Route::delete('establecimientos/{id}', [EstablecimientoController::class,'destroy']); //Eliminar

//Oficios
Route::get('oficios', [OficioController::class,'buscaPorEscuela']);
Route::get('oficios-mod', [OficioController::class,'index']);
Route::get('oficios/create', [OficioController::class,'create']); //Formularo crear
Route::get('oficios/buscaOficio', [OficioController::class,'buscaPorEscuela']);
Route::get('oficios/muestraOficios', [OficioController::class,'muestraOficios'])->name('showO');
Route::post('oficios', [OficioController::class,'store']); //Guardar
Route::get('oficios/{id}', [OficioController::class,'show'])->name('Showone'); //Mostrar tupla
Route::get('oficios/{id}/estadomod', [OficioController::class,'edit']); //Formularo Actualizar
Route::put('oficios/{id}', [OficioController::class,'updateEstado']);//Actualizar
Route::delete('oficios/{id}', [OficioController::class,'destroy'])->name('deleto'); //Eliminar

//Ordenes
//Route::get('ordenesCompra', [OrdenController::class,'index']); //Mostrar todo
//Route::get('ordenesCompra/create', [OrdenController::class,'create']); //Formularo crear
//Route::post('ordenesCompra', [OrdenController::class,'store']); //Guardar
//Route::get('ordenesCompra/{id}', [OrdenController::class,'show']); //Mostrar tupla
//Route::get('ordenesCompra/{id}/edit', [OrdenController::class,'edit']); //Formularo Actualizar
//Route::put('ordenesCompra/{id}', [OrdenController::class,'update']);//Actualizar
//Route::delete('ordenesCompra/{id}', [OrdenController::class,'destroy']); //Eliminar



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
