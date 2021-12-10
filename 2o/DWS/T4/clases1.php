<?php

class ClaseA
{
    public $var1 = 15;

    public function verVariable()
    {
        echo $this->var1;
    }
}

$objetoClaseA = new ClaseA();
$objetoClaseA->verVariable();
