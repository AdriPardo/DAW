<?php

namespace app\controllers;

use core\Controller;
use app\models\Actor as modelActor;

class Actor extends Controller
{
    function getById($vars)
    {

        $actor = modelActor::find($vars['id']);
        include('./app/views/main.phtml');
        include('./app/views/actores_ficha.phtml');
    }
}
