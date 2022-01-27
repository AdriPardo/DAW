<?php

class Empleado
{
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     *
     * @return  self
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
}

$empleado1 = new Empleado("Pepe", 1200);
$empleado2 = new Empleado("Jose", 1350);

$nombre_empleado = $empleado1->getNombre();
$sueldo_empleado = $empleado1->getSueldo();
echo "$nombre_empleado tiene un sueldo de $sueldo_empleado ";
