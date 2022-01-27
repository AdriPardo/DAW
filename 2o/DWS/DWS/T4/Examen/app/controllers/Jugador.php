<?php

namespace app\controllers;

use core\Controller;
use app\models\Jugador as modelJugador;

class Jugador extends Controller
{
    function getAll()
    {
        $data = NULL;
        $cabeceras = getallheaders();

        if (array_key_exists("skip", $cabeceras) && array_key_exists("data_length", $cabeceras)) {
            $skip = $cabeceras["skip"];
            $data_length = $cabeceras["data_length"];
            $jugadores = modelJugador::limit($skip, $data_length);
        } else {
            $jugadores = modelJugador::all();
        }
        foreach ($jugadores as $jugador) {
            $data[] = [
                'id' => $jugador['id'],
                'nombre' => $jugador['first_name'] . " " . $jugador['last_name'],
                'links' => [
                    'self' => $_ENV['APP_URL'] . '/jugadores/' . $jugador['id']
                ],
            ];
        }
        $this->echoResponse(false, 200, $data);
    }
}
