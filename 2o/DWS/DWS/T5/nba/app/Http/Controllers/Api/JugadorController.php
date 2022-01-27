<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Jugador::get();
        return response()->json($players, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador->codigo = $request->Codigo;
        $jugador->nombre = $request->Nombre;
        $jugador->procedencia = $request->Procedencia;
        $jugador->altura = $request->Altura;
        $jugador->peso = $request->Peso;
        $jugador->posicion = $request->Posicion;
        $jugador->equipo()->associate(Equipo::findOrFail($request->Nombre_equipo));
        $jugador->save();
        return response()->json($jugador, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        $jugadorBuscado = Jugador::findOrFail($jugador->codigo);
        return response()->json($jugadorBuscado, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        $jugador = Jugador::findOrFail($jugador->codigo);
        $jugador->nombre = $request->Nombre;
        $jugador->procedencia = $request->Procedencia;
        $jugador->altura = $request->Altura;
        $jugador->peso = $request->Peso;
        $jugador->posicion = $request->Posicion;
        $jugador->equipo()->associate(Equipo::findOrFail($request->Nombre_equipo));
        $jugador->save();
        return response()->json($jugador, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return response()->json($jugador);
    }
}
