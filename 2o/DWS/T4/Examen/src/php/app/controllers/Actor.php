<?php

namespace app\controllers;

use core\Controller;
use app\models\Actor as modelActor;

class Actor extends Controller {
    function getAll() {
        $data = NULL;
        $actores = modelActor::all();
        foreach ($actores as $actor) {
            $data[] = [
                    'id' => $actor['id'],
                    'nombre' => $actor['nombre'],
                    'anyo' => $actor['anyo'],
                    'pais' => $actor['pais'],
                    'links' => [ 
                        'self' => $_ENV['APP_URL'] . '/actores/' . $actor['id']
                ]
            ];
        }
        $this->echoResponse(false, 200, $data);
    }
    function getById($vars) {
        $data = NULL;
        $actor = modelActor::find($vars['id']);
            $data[] = [
                    'id' => $actor['id'],
                    'nombre' => $actor['nombre'],
                    'anyo' => $actor['anyo'],
                    'pais' => $actor['pais'],
                    'links' => [ 
                        'self' => $_ENV['APP_URL'] . '/actores/' . $actor['id']
                ]
            ];
        $this->echoResponse(false, 200, $data);
    }

}