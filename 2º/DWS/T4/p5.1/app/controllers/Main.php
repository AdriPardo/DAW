<?php

namespace app\controllers;

use core\Controller;

class Main extends Controller
{
    function index()
    {
        include('./app/views/main.php');
    }
    function error()
    {
        echo "<h1 style='text-align:center; color:red;'>404 - Error jefazo
        </h1>";
    }
}
