<?php

namespace app\controllers;

use core\Controller;
use app\models\Director as modelDirector;

class Director extends Controller
{
    function getById($vars)
    {

        $director = modelDirector::find($vars['id']);
        include('./app/views/main.phtml');
        include('./app/views/directores_ficha.phtml');
    }
}
