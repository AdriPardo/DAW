<?php

namespace models;

use core\Model;

class Libro extends Model
{
    protected $table = 'libros.php';

    function getById($vars)
    {
        $libro = Model::getById($vars['id']);
        echo $this->templates->render('libros_ficha', ['libro' => $libro]);
    }
}
