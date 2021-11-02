<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;
use app\models\Critica as modelCritica;

class Critica extends Controller
{
    function getAll()
    {
        $peliculas = modelPelicula::all();
        include('./app/views/main.phtml');
        include('./app/views/criticas.phtml');
    }

    function getById($vars)
    {
        $critica = modelCritica::find($vars['id']);
        include('./app/views/main.phtml');
        include('./app/views/criticas_ficha.phtml');
    }

    function insertForm($vars)
    {
        $id_pelicula = $vars['id'];
        include('./app/views/main.phtml');
        include('./app/views/criticas_insertar.phtml');
    }

    public function insert($vars)
    {
        modelCritica::insert();
        header('Location: ' . $_ENV['APP_URL'] . '/peliculas/' . $vars['id'] .
            '/criticas');
    }

    public function editForm($vars)
    {
        $critica = modelCritica::find($vars['id_critica']);
        $id_pelicula = $critica['id_pelicula'];
        include('./app/views/main.phtml');
        include('./app/views/criticas_editar.phtml');
    }

    public function edit($vars)
    {
        modelCritica::edit($vars['id_critica']);
        header('Location: ' . $_ENV['APP_URL'] . '/peliculas/' .
            $vars['id_pelicula'] . '/criticas');
    }
}
