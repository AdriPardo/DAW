<?php

namespace app\controllers;

use core\Controller;
use app\models\Usuario as modelUsuario;


class Login extends Controller
{

    function login()
    {
        $dataPOST = \json_decode(file_get_contents("php://input"), false);
        $usuario = $dataPOST->usuario;
        $usuario = modelUsuario::where("usuario", $usuario);

        if (!$usuario || $usuario["usuario"] != $dataPOST->usuario || !password_verify($dataPOST->password, $usuario["password"])) {
            $this->echoResponse(true, 401, null);
        } else {
            $usuario["api_token"] = $this->generateToken(60);
            modelUsuario::edit($usuario["id"], $usuario);
            $this->echoResponse(false, 200, $usuario["api_token"]);
        }
    }

    private function generateToken($length)
    {
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $token = "";
        for ($i = 0; $i < $length; $i++) {
            $token .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $token;
    }

    protected function checkToken($token)
    {
        $usuario = modelUsuario::where("api_token", $token);

        if (!$usuario) {
            return false;
        } else {
            return $usuario;
        }
    }

    protected function admin($usuario)
    {
        if (!$usuario || $usuario["admin"] !== "1") {
            return false;
        } else {
            return true;
        }
    }

    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }
}
