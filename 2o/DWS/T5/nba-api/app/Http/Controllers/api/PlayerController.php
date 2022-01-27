<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function __construct()
    {
       /*  $this->middleware(
            'jwt',
            ['only' => ['store', 'update', 'destroy']]
        ); */
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::get();
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
        $player = new Player();
        $player->id = $request->Id;
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
    public function show(Player $player)
    {
        return response()->json($player, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $player->id = $request->Id;
        $player->first_name = $request->First_name;
        $player->last_name = $request->Last_name;
        $player->team_id = $request->Team_id;
        $player->weight = $request->Weight;
        $player->height = $request->Height;
        $player->position = $request->Position;
        $player->NbaDotComPlayerId = $request->NbaDotComPlayerId;
        $player->save();
        return response()->json($player, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return response()->json($player);
    }
}
