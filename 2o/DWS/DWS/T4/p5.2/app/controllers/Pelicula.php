<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;

class Pelicula extends Controller
{

    function getAll()
    {
        $peliculas = modelPelicula::all();
        include('./app/views/main.phtml');
        include('./app/views/peliculas.phtml');
    }

    function getById($vars)
    {

        $pelicula = modelPelicula::find($vars['id']);
        $actores = modelPelicula::getActores($vars['id']);
        $directores = modelPelicula::getDirectores($vars['id']);
        $criticas = modelPelicula::getCriticas($vars['id']);
        include('./app/views/main.phtml');
        include('./app/views/peliculas_ficha.phtml');
    }

    function criticas($vars)
    {
        $criticas = modelPelicula::getCriticas($vars['id']);
        $id_pelicula = $vars['id'];
        include('./app/views/main.phtml');
        include('./app/views/peliculas_criticas.phtml');
    }
}
