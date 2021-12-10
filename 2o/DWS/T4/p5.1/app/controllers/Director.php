<?php

namespace app\controllers;

use core\Controller;
use app\models\Director as modelDirector;

class Director extends Controller
{
    function getById($vars)
    {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" href="./css/estilos.css"><div class="col-3"><div class="alert alert-secondary d-flex">
        <a href="../peliculas" class="btn btn-dark">Peliculas</a>&nbsp;&nbsp;
    </div>';
        $director = modelDirector::find($vars['id']);
        echo '<b>Nombre: </b>' . $director["nombre"] . '<br />
            <b>Año: </b>' . $director["anyo"] . '<br />
            <b>País: </b>' . $director["pais"] . '<br />';
    }
}
