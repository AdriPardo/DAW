<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;

class Pelicula extends Controller
{

    function getAll()
    {
        $pelicula = modelPelicula::all();
        echo '<div class="alert alert-secondary d-flex">
        <a href="./peliculas" class="btn btn-dark">Peliculas</a>&nbsp;&nbsp;
    </div>';
        foreach ($pelicula as $value) {
            $id = $value["id"];
            $titulo = $value["titulo"];
            echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" href="./css/estilos.css"><div class="col-3">
                    <a href="peliculas/' . $id . '" class="custom-card">
                    <div class="card" style="width: 100%">
                        <img class="card-img-top" src="' . $_ENV['APP_URL'] . '/public/imgs/peliculas/' . $id . '.jpg">
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">' .
                $titulo .
                '</h5>  </div>
                        </div>
                        </a>
                    </div>';
        }
    }

    function getById($vars)
    {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" href="./css/estilos.css"><div class="col-3"><div class="alert alert-secondary d-flex">
        <a href="../peliculas" class="btn btn-dark">Peliculas</a>&nbsp;&nbsp;
    </div>';
        $pelicula = modelPelicula::find($vars['id']);
        $actores = modelPelicula::getActores($vars['id']);
        $directores = modelPelicula::getDirectores($vars['id']);

        echo '<b>Título: </b> ' . $pelicula["titulo"] . ' <br />
            <b>Año: </b>' . $pelicula["anyo"] . '<br />
            <b>Duración: </b>' . $pelicula["duracion"] . '<br />';

        foreach ($directores as $value) {
            echo '<br><b>Director: </b> ' . '
                <a href="../directores/' . $value['id'] . '">
                    <li>' . $value["nombre"] . '</li>
                </a> ';
        }
        $contenido_actores = "<b>Actores: </b>";
        foreach ($actores as $value) {
            $contenido_actores .= ' <a href="../actores/' . $value['id'] . '"><li>' . $value["nombre"] . '</li></a>';
        }
        echo $contenido_actores;
    }
}
