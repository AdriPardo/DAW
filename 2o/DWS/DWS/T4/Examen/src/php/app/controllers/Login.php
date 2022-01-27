<?php

namespace app\controllers;

use core\Controller;
use app\models\Usuario as modelUsuario;

class Login extends Controller {
    
    function login($vars) {
        $dataPOST = \json_decode(file_get_contents("php://input"));
        $usuario = $dataPOST->usuario;
        $usuario = modelUsuario::find($usuario);

        if (!usuario) {
            $this->echoResponse(true, 401, null);
        }
        else {
            
        }
    }
}
