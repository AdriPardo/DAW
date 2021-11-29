<?php

namespace app\controllers;

use core\Controller;
use app\models\Critica as modelCritica;

class Critica extends Controller {

    function getAll() {
        $data = NULL;
        foreach (modelCritica::all() as $critica) {
            $data[] = [
                'id' => $critica['id'],
                'medio' => $critica['medio'],
                'puntuacion' => $critica['puntuacion'],
                'critica' => $critica['critica'],
                'links' => [ 
                    'self' => $_ENV['APP_URL'] . '/criticas/'.$critica['id']
                ],
            ];
        };
        $this->echoResponse(false, 200, $data);
    }

    function getById($vars) {
        $data = NULL;
        $critica = modelCritica::find($vars['id']);
        $data[] = [
            'id' => $critica['id'],
            'medio' => $critica['medio'],
            'puntuacion' => $critica['puntuacion'],
            'critica' => $critica['critica'],
            'links' => [ 
                'self' => $_ENV['APP_URL'] . '/criticas/'.$critica['id']
            ],
        ];
        $this->echoResponse(false, 200, $data);
    }

}