<?php

namespace app\controllers;

use core\Controller;
use app\models\Director as modelDirector;

class Director extends Controller {
    function getAll() {
        $data = NULL;
        $directores = modelDirector::all();
        foreach ($directores as $director) {
            $data[] = [
                    'id' => $director['id'],
                    'nombre' => $director['nombre'],
                    'anyo' => $director['anyo'],
                    'pais' => $director['pais'],
                    'links' => [ 
                        'self' => $_ENV['APP_URL'] . '/directores/' . $director['id']
                ]
            ];
        }
        $this->echoResponse(false, 200, $data);
    }
    function getById($vars) {
        $data = NULL;
        $director = modelDirector::find($vars['id']);
            $data[] = [
                    'id' => $director['id'],
                    'nombre' => $director['nombre'],
                    'anyo' => $director['anyo'],
                    'pais' => $director['pais'],
                    'links' => [ 
                        'self' => $_ENV['APP_URL'] . '/directores/' . $director['id']
                ]
            ];
        $this->echoResponse(false, 200, $data);
    }
}