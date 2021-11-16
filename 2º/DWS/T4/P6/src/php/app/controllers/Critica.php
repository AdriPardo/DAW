<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;
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

    function insertForm ($vars) {
        $id_pelicula = $vars['id'];
        include("./app/views/main.phtml");
        include("./app/views/criticas_insertar.phtml");
    }

    public function insert($vars) {
        modelCritica::insert();
        header('Location: ' . $_ENV['APP_URL'] . '/peliculas/' . $vars['id'] . 
        '/criticas'); 
    }

    public function editForm($vars) {
        $critica = modelCritica::find($vars['id_critica']);
        $id_pelicula = $vars['id_pelicula'];
        include("./app/views/main.phtml");
        include("./app/views/criticas_editar.phtml");
    }

    public function edit($vars) {
        modelCritica::edit($vars['id_critica']);
        header('Location: ' . $_ENV['APP_URL'] . '/peliculas/' . 
        $vars['id_pelicula'] . '/criticas'); 
    }

    public function delete($vars) {
        modelCritica::delete($vars['id_critica']);
        header('Location: ' . $_ENV['APP_URL'] . '/peliculas/' . 
        $vars['id_pelicula'] . '/criticas'); 
    }
}