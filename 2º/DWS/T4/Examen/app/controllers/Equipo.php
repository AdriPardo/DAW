<?php

namespace app\controllers;

use core\Controller;
use app\models\Equipo as modelEquipo;
use app\controllers\Login as loginController;

class Equipo extends Controller
{

    function getAll()
    {
        
        $data = NULL;
        $equipos = modelEquipo::all();
        foreach ($equipos as $equipo) {
            $data[] = [
                'id' => $equipo['id'],
                'nombre' => $equipo['city'] . " " . $equipo['name'],
                '_links' => [
                    'self' => $_ENV['APP_URL'] . '/equipos/' . $equipo['id']
                ]
            ];
        }
        $this->echoResponse(false, 200, $data);
    }

    function getById($vars)
    {
        $data = NULL;
        $equipo = modelEquipo::find($vars['id']);
        $data[] = [
            'id' => $equipo['id'],
            'abreviatura' => $equipo['short_name'],
            'ciudad' => $equipo['city'],
            'titulo' => $equipo['name'],
            'conferencia' => $equipo['conference'],
            'division' => $equipo['division'],
            '_links' => [
                'self' => $_ENV['APP_URL'] . '/equipos/' . $equipo['id']
            ],
            'embebbed' => [
                'jugadores' => $_ENV['APP_URL'] . '/equipos/' . $equipo['id'] . '/jugadores'
            ]
        ];

        $this->echoResponse(false, 200, $data);
    }

    function getJugadores($vars)
    {
        $data = NULL;
        foreach (modelEquipo::getJugadores($vars['id']) as $jugador) {
            $data[] = [
                'id' => $jugador['id'],
                'nombre' => $jugador['first_name'] . " " . $jugador['last_name'],
                'links' => [
                    'self' => $_ENV['APP_URL'] . '/equipos/' . $vars['id'] . '/jugadores/'. $jugador['id']
                ],
            ];
        };
        $this->echoResponse(false, 200, $data);
    }

    
}
