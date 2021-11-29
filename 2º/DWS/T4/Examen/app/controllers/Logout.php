<?php

namespace app\controllers;

use core\Controller;
use app\models\Usuario as modelUsuario;
use app\controllers\Login as loginController;


class Logout extends Controller
{

    function logout()
    {
        $cabeceras = getallheaders();
        $token = array_key_exists("Authorization", $cabeceras) ? ltrim(substr($cabeceras["Authorization"], 7)) : NULL;
        $usuario = loginController::checkToken($token);
        $usuario["api_token"] = '';
        modelUsuario::edit($usuario['id'], $usuario);
    }
}
