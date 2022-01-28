<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Player::paginate(10);
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player();
        $player->first_name = $request->First_name;
        $player->last_name = $request->Last_name;
        $player->team_id = $request->Team_id;
        $player->weight = $request->Weight;
        $player->height = $request->Height;
        $player->position = $request->Position;
        $player->nbadotcomplayerid = $request->NbaDotComPlayerId;
        $player->save();
        return response()->json($player, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $jugadore)
    {
        return response()->json($jugadore, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $jugadore)
    {
        $jugadore->first_name = $request->First_name;
        $jugadore->last_name = $request->Last_name;
        $jugadore->team_id = $request->Team_id;
        $jugadore->weight = $request->Weight;
        $jugadore->height = $request->Height;
        $jugadore->position = $request->Position;
        $jugadore->NbaDotComPlayerId = $request->NbaDotComPlayerId;
        $jugadore->save();
        return response()->json($jugadore, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $jugadore)
    {
        $jugadore->delete();
        return response()->json($jugadore);
    }
}
