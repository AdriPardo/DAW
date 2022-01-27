<?php

namespace app\controllers;

use core\Controller;
use app\models\Pelicula as modelPelicula;
use app\controllers\Login as loginController;

class Pelicula extends Controller {
    
    function getAll() {
        $cabeceras = getallheaders();
        $token = array_key_exists("Authorization", $cabeceras) ? ltrim(substr($cabeceras["Authorization"], 7)) : NULL;
        $usuario = $token !== NULL ? loginController::checkToken($token) : NULL;
        $admin = $usuario !== NULL ? loginController::admin($usuario) : NULL;

        if (!$usuario || !$admin) {
            $this->echoResponse(true, 401, []);
        }
        else {
            $data = NULL;
            $peliculas = modelPelicula::all();
            foreach ($peliculas as $pelicula) {
                $data[] = [
                    'id' => $pelicula['id'],
                    'titulo' => $pelicula['titulo'],
                    '_links' => [ 
                       'self' => $_ENV['APP_URL'] . '/peliculas/' . $pelicula['id']
                    ]
                ];
            }
            $this->echoResponse(false, 200, $data);
        }
        
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
                'self' => $_ENV['APP_URL'] . '/peliculas/' . $pelicula['id']
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

    function insert (){
        modelPelicula::insert();
        $data = json_decode(file_get_contents("php://input"), false);
        $this->echoResponse(false, 201, $data);
    }

    function put ($vars) {
        $data = json_decode(file_get_contents("php://input"), false);
        modelPelicula::edit($vars["id"], $data);
        $this->echoResponse(false, 200, $data);
    }

    function patch ($vars) {
        $data = json_decode(file_get_contents("php://input"), false);
        modelPelicula::edit($vars["id"], $data);
        $this->echoResponse(false, 200, $data);
    }

    function delete ($vars) {
        modelPelicula::delete($vars["id"]);
        $this->echoResponse(false, 200, []);
    }
}