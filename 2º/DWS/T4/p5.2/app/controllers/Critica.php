<?php

namespace app\controllers;

use core\Controller;
use app\models\Critica as modelCritica;
use app\models\Pelicula as modelPelicula;

class Critica extends Controller
{
    function getAll()
    {
        $pelicula = modelPelicula::all();
        echo '<div class="alert alert-secondary d-flex">
        <a href="./peliculas" class="btn btn-dark">Peliculas</a>&nbsp;&nbsp;
    </div>';
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" href="./css/estilos.css">
                    <div class="container">
                    <div class="row">';
        foreach ($pelicula as $value) {
            $id = $value["id"];
            $titulo = $value["titulo"];

            echo '<div class="col">
            <div class="card" style="width: 18rem;">               
            <img class="card-img-top" src="' . $_ENV['APP_URL'] . '/public/imgs/peliculas/' . $id . '.jpg">     
                            <h5 class="card-title">' . $titulo . '</h5> <a href="./criticas/"' . $id . '" class="btn btn-success"> Ver Critica</a> 
                          </div></div>
                          ';
        }
        echo '</div> 
                        </div>';
    }
}
