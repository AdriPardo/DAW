<?php

namespace app\controllers;

use core\Controller;
use app\controllers\Login as loginController;

class Protegida extends Controller
{

    function checkToken()
    {
        $cabeceras = getallheaders();
        $token = array_key_exists("Authorization", $cabeceras) ? ltrim(substr($cabeceras["Authorization"], 7)) : NULL;
        $usuario = loginController::checkToken($token);

        if ($usuario) {
            $data[] = [
                'acceso' => "permitido"
            ];
            $this->echoResponse(false, 200, $data);
        } else {
            $data[] = [
                'acceso' => "denegado"
            ];
            $this->echoResponse(false, 401, $data);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }
}
