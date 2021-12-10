<?php

namespace app\controllers;

use core\Controller;

class Main extends Controller
{
    function index()
    {
        include('./app/views/main.phtml');
        include('./app/views/index.phtml');
    }
    function error()
    {
        include('./app/views/error.phtml');
    }
}
