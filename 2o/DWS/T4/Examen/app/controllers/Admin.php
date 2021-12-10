<?php

namespace app\controllers;

use core\Controller;
use app\controllers\Login as loginController;

class Admin extends Controller
{

    function checkAdmin()
    {
        $cabeceras = getallheaders();
        $token = array_key_exists("Authorization", $cabeceras) ? ltrim(substr($cabeceras["Authorization"], 7)) : NULL;
        $usuario = $token !== NULL ? loginController::checkToken($token) : NULL;
        $admin = loginController::admin($usuario);
        if ($admin) {
            $data[] = [
                'acceso' => "permitido"
            ];
            $this->echoResponse(false, 200, $data);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }
}
