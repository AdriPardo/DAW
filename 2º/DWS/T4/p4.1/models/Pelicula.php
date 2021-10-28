<?php

namespace models;

use core\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas.php';

    protected function getActores($id)
    {
        $result = array();
        return $this->recorrerArray($result, "actor", $id);
    }

    protected function getDirectores($id)
    {
        $result = array();
        return $this->recorrerArray($result, "director", $id);
    }

    public function recorrerArray($result, $control, $id)
    {
        if ($control == "actor") {
            $arrayCargado = include('./bbdd/actores.php');
            $baseABuscar = include('./bbdd/pelicula_actor.php');
        } else if ($control == "director") {
            $arrayCargado = include('./bbdd/directores.php');
            $baseABuscar = include('./bbdd/pelicula_director.php');
        }
        $arrayIds = \JmesPath\search("[?id_pelicula ==`" . $id . "`].id_" . $control . "", $baseABuscar);
        foreach ($arrayCargado as $value) {
            if (in_array($value["id"], $arrayIds)) {
                array_push($result, $value);
            }
        }
        return $result;
    }
}
