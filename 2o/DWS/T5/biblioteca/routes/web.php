<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});
//Paso de parametro obligatorios
Route::get('saludo/{nombre}', function ($nombre) {
    return "Hola, " . $nombre;
});
//Parametro no tiene por que ir
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Hola, " . $nombre;
});
//Comprobacion de parametros
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Hola, " . $nombre;
})->where('nombre', "[A-Za-z]+");
//Rutas con nombre
Route::get('contacto', function () {
    return "Página de contacto";
})->name('ruta_contacto');
