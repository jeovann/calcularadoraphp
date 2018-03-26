<?php
if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['tipo'])){
    $numero1 = (double) $_POST['valor1'];
    $numero2 = (double) $_POST['valor2'];
    $tipo = $_POST['tipo'];
    
    switch($tipo)
    {
        case 'somar': $resultado = $numero1 + $numero2; break;
        case 'subtrair': $resultado = $numero1 - $numero2; break;
        case 'multiplicar': $resultado = $numero1 * $numero2; break;
        case 'dividir': $resultado = $numero1 / $numero2; break;
    }

    echo $resultado;
}
?>