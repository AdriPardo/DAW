<?php

//Ejercicio 1

echo "Hello World! <br>";

//Ejercicio 2
$var1 = "Worl!";

echo "Helllo  $var1 <br>";

//Ejercicio 3
$var1 = "Hola mundo <br>";

echo "<h1>$var1</h1>";

//Ejercicio 4
$num1 = 6;
$num2 = 12;

if ($num1 > $num2) {
    echo "$num1 es mayor que $num2 <br>";
} else {
    echo "$num2 es mayor que $num1 <br>";
}
//Ejercicio 5
$num1 = 5;
$num2 = 8;

switch ($num1 <=> $num2) {
    case -1:
        echo "El numero $num2 es el mayor <br>";
        break;
    case  0:
        echo "Los numeros son iguales <br>";
        break;
    case  1:
        echo "El numero $num1 es el mayor <br>";
        break;
}

//Ejercicio 6
$nomina = 1000;
const incremento = 20 / 100;
const decremento = 15 / 100;

if ($nomina < 800) {
    $nomina += $nomina * incremento;
} elseif ($nomina > 1200) {
    $nomina -= $nomina * decremento;
}

echo $nomina . "<br>";

//Ejercicio 7
$inferior = 1;
$limite = 10;
$aleatorio = rand($inferior, $limite);

$resultado = $aleatorio % 2 ? "El numero $aleatorio es impar <br>" : "El numero $aleatorio es par <br>";

echo $resultado;

//Ejercicio 8
$cadena = "TRWAGMYFPDXBNJZSQVHLCKEO";
$min = 10000000;
$max = 99999999;

$dni = rand($min, $max);
$letra = substr($cadena, (($dni % 23) - 1), 1);

echo "$letra <br>";

//Ejercicio 9
$numero = 123456.789;

$numeroFormateado = number_format($numero, 2, ",", ".");

echo $numeroFormateado . "<br>";
