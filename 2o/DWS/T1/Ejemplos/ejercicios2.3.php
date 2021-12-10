<?php

declare(strict_types=1);

//Ejercicio 18

function suma($a, $b)
{
    $resultado = $a + $b;
    return $resultado;
};
echo suma(3, 4);

//Ejercicio 19

$numero1 = 3;
function suma2($a, $b)
{
    $resultado = $a + $b;
    return $resultado;
};
echo suma2($numero1, 4);

//Ejercicio 20

$miArray = [3, 4, 6];

function añadirElemento($elementoAñadir, $array)
{

    array_push($array, $elementoAñadir);
    return $array;
};

var_dump(añadirElemento(7, $miArray));

//Ejercicio 21
$frase = "Hola genio";

function mostrarFrase($frase = "Hola mundo")
{
    echo $frase;
};

mostrarFrase($frase);
mostrarFrase();

//Ejercicio 22

$cadena = "Soy una cadena";

function mostrarCadena($cadena)
{
    if (is_string($cadena)) {
        echo $cadena;
    } else {
        echo "No es una cadena melon";
    }
};

mostrarCadena($cadena);
mostrarCadena(5);

//Ejercicio 23

function multiplicacion(...$numeros)
{
    $resultado = 1;
    foreach ($numeros as $n) {
        $resultado = $resultado * $n;
    }
    echo $resultado;
};

multiplicacion(2, 2, 2, 2, 2, 2, 2, 2);

//Ejercicio 24

function sumaAñade(int $numero2, array &$array, int ...$numeros)
{
    foreach ($numeros as $n) {
        $numero2 += $n;
    }
    array_push($array, $numero2);
};
sumaAñade(2, $miArray, 3);
var_dump($miArray);

//Ejercicio 25

$resultado = function ($a, $b) {
  echo($a * $b)  ;
};

$resultado(1,2);

//Ejercicio 26

$resultado2 = fn ($a, $b) =>$a*$b;
  
echo $resultado2(1,2);