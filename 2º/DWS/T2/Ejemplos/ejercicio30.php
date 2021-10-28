<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 30</title>
</head>
<?php

$numero1 = $_POST["numero1"] ?? null;
$numero2 = $_POST["numero2"] ?? null;
$estilo = "style=display:none";


if ($numero1 != null && $numero2 != null) {
    $estilo = "style=display:block";

    switch ($_POST["operacion"]) {

        case 'suma':
            $resultado = $numero1 + $numero2;

            break;
        case 'resta':
            $resultado = $numero1 - $numero2;

            break;

        case 'division':
            try {
                if ($numero2 == 0) {
                    throw new Exception('División por cero.');
                    break;
                } else {
                    $resultado = $numero1 / $numero2;
                    break;
                }
            } catch (Exception $e) {
                header("Location: http://localhost/DWS/T2/Ejemplos/ejercicio30error.php");
            }
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;

            break;
    }
}

?>

<body>
    <form action="./ejercicio30.php" method="POST">
        <label for="" <?= $estilo ?>>El resultado es <?= $resultado ?></label><br>
        <label for="numero1">Numero 1:</label>
        <input type="text" name="numero1"> <br>
        <label for="numero2">Numero 2:</label>
        <input type="text" name="numero2"><br>
        <input type="radio" name="operacion" value="suma" id="">+
        <input type="radio" name="operacion" value="resta" id="">-
        <input type="radio" name="operacion" value="multiplicacion" id="">*
        <input type="radio" name="operacion" value="division" id="">/<br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>