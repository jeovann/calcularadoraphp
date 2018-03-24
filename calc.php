<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$tipo = $_POST['tipo'];

    switch($tipo)
    {
        case 'somar': $resultado = $numero1 + $numero2; break;
        case 'subtrair': $resultado = $numero1 - $numero2; break;
        case 'multiplicar': $resultado = $numero1 * $numero2; break;
        case 'dividir': $resultado = $numero1 / $numero2; break;
    }

    echo $resultado;

?>