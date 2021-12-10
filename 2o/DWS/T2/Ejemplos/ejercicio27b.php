<?php
$resultado = 1;
foreach ($_POST as $n) {
    $resultado *= $n;
}
echo $resultado;
