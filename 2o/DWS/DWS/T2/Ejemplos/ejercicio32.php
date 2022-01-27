<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<?php

$numero1 = $_POST["numero1"] ?? null;
$estilo = "style=display:none";


function calculoFactorial($numeroTope)
{
    if ($numeroTope == 1)
        return 1;
    else
        return $numeroTope * calculofactorial($numeroTope - 1);
}
if ($numero1 != null) {
    $resultado = calculoFactorial($numero1);
    $estilo = "style=display:block";
}

?>

<body>
    <form action="./ejercicio31.php" method="POST">
        <label for="numero1">Numero 1:</label>
        <input type="text" name="numero1"> <br>
        <input type="submit" value="Enviar">
        <label for="" <?= $estilo ?>>El resultado es <?= $resultado ?></label><br>

    </form>
</body>

</html>