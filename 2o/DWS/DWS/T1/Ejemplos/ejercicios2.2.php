<?php

//Ejercicio 11
$aleatorio = rand(5, 15);
$array1 = array();
for ($n = 0; $n <= $aleatorio; $n++) {
    array_push($array1, rand(0, 10));
};

$arrayLength = count($array1);

echo "<h2>Datos del array:</h2><br>";
echo "Tamaño del array: $arrayLength <br>";
echo "Valores entre 0 y 10 <br><br><br>";
echo "<pre>";
print_r(array_values($array1));
echo "</pre>";

//Ejercicio 12 
const numero = 7;
$array2 = [
    "1" => 1,
    "2" => 2,
    "3" => 3,
    "4" => 4,
    "5" => 5,
    "6" => 6,
    "7" => 7,
    "8" => 8,
    "9" => 9,
];

$contenido1 = "";
$contenido2 = "";
foreach ($array2 as $value) {
    $contenido1 .= "<td>x$value</td>";
    $resultado = $value * numero;
    $contenido2 .= "<td>$resultado</td>";
};

$tabla = "<table border=1><tr><td colspan ='100%'>Tabla de multiplicar del 7</td></tr>$contenido1</tr></tr>$contenido2</tr></table><br>";
echo $tabla;

//Ejercicio 13

//Ejercicio 14
$mayo = array(
    "Tornillos" => 57,
    "Tuercas" => 23,
    "Clavos" => 45,
    "Arandelas" => 56,
    "Muelles" => 32,
);
$junio = array(
    "Tornillos" => 32,
    "Arandelas" => 51,
    "Bridas" => 309,
);

$resultado = array_merge($mayo, $junio);
echo "<pre>";
print_r($resultado);
echo "</pre>";

//Ejercicio 15
$sinPostre = [];

$menus = [
    [
        "primero" => "sopa",
        "segundo" => "carne",
        "postre" => "tarta"
    ],
    [
        "primero" => "ensalada",
        "segundo" => "carne",
    ],
    [
        "primero" => "macarrones",
        "segundo" => "pescado",
    ],
    [
        "primero" => "sopa",
        "segundo" => "pescado",
        "postre" => "flan"
    ],
];

foreach ($menus as $key => $value) {
    if (!array_key_exists("postre", $value)) {
        $sinPostre[] = $key + 1;
    }
};
echo "<pre>";
print_r(array_values($sinPostre));
echo "</pre>";

//Ejercicio 16 
$array1 = [34, 56, 78, 8, 98, 33, 45];
$array2 = [56, 76, 2, 68, 77, 25, 15];

$resultado = array_merge($array1, $array2);
echo "<pre>";
sort($resultado);
print_r(array_values($resultado));
echo "</pre>";
