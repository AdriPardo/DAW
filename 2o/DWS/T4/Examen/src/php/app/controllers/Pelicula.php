<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;

class Pelicula extends Controller {
    function getAll() {
        $data = NULL;
        $peliculas = modelPelicula::all();
        foreach ($peliculas as $pelicula) {
            $data[] = [
                'id' => $pelicula['id'],
                'titulo' => $pelicula['titulo'],
                '_links' => [ 
                    'self' => $_ENV['APP_URL'] . '/' . $pelicula['id']
                ]
            ];
        }
        $this->echoResponse(false, 200, $data);
    }

    function getById($vars) {
        $data = NULL;
        $pelicula = modelPelicula::find($vars['id']);
         
        foreach (modelPelicula::getDirectores($vars['id']) as $director) {
            $directores[] = [
                'id' => $director['id'],
                'nombre' => $director['nombre'],
                'anyo' => $director['anyo'],
                'pais' => $director['pais'],
                'links' => [ 
                    'self' => $_ENV['APP_URL'] . '/directores/' . $director['id']
                ],
            ];
        };

        foreach (modelPelicula::getActores($vars['id']) as $actor) {
            $actores[] = [
                'id' => $actor['id'],
                'nombre' => $actor['nombre'],
                'anyo' => $actor['anyo'],
                'pais' => $actor['pais'],
                'links' => [ 
                    'self' => $_ENV['APP_URL'] . '/actores/' . $actor['id']
                ],
            ];
        };

        foreach (modelPelicula::getCriticas($vars['id']) as $critica) {
            $criticas[] = [
                'id' => $critica['id'],
                'medio' => $critica['medio'],
                'puntuacion' => $critica['puntuacion'],
                'critica' => $critica['critica'],
                'links' => [ 
                    'self' => $_ENV['APP_URL'] . '/peliculas/'.$critica['id_pelicula'].'/critica/'.$critica['id']
                ],
            ];
        };
        
        $data[] = [
            'id' => $pelicula['id'],
            'titulo' => $pelicula['titulo'],
            '_links' => [ 
                'self' => $_ENV['APP_URL'] . '/' . $pelicula['id']
            ],
            'embebbed' => [
                'directores' => $directores,
                'actores' => $actores,
                'criticas' => $criticas
            ]
        ];
        
        $this->echoResponse(false, 200, $data);
    }

    function criticas($vars) {
        $data = NULL;
        foreach (modelPelicula::getCriticas($vars['id']) as $critica) {
            $data[] = [
                'id' => $critica['id'],
                'medio' => $critica['medio'],
                'puntuacion' => $critica['puntuacion'],
                'critica' => $critica['critica'],
                'links' => [ 
                    'self' => $_ENV['APP_URL'] . 'peliculas/'.$vars['id'].'/criticas/'.$critica['id']
                ],
            ];
        };
        $this->echoResponse(false, 200, $data);
    }

    function insert () {
        modelPelicula::insert();
    }
}