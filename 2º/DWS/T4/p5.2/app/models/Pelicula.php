<?php

namespace app\models;

use core\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected function getActores($id)
    {

        return $this->belongsToMany('actores', 'pelicula_actor', 'id_pelicula', 'id_actor', $id);
    }

    protected function getDirectores($id)
    {

        return $this->belongsToMany('directores', 'pelicula_director', 'id_pelicula', 'id_director', $id);
    }

    protected function getCriticas($id)
    {
        return $this->hasMany('criticas', 'id_pelicula', $id);
    }
}
