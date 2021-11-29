<?php

namespace app\controllers;

use core\Controller;

class Main extends Controller
{

    function index()
    {
        $endpoints = array(
            '/equipos',
            '/jugadores',
            '/login',
            '/logout',
            '/protegida',
            '/admin'
        );
        echo "Endpoints API REST V1 <br><br>";
        foreach ($endpoints as $value) {
            echo $value, "<br>";
        }
    }

    function error()
    {
        echo "Error 404 - Recurso no encontrado";
        http_response_code(404);
    }
}
