<HTML>
<HEAD>
<title>CALCULADORA2.0</title>
</HEAD>
<BODY>
<form method="post" action="calcular.php">
Valor 1
<input type="text" name="valor1" size="5" />
<select name="tipo">
<option selected="selected"> soma</option>
<option>Subitrair</option>
<option>Multiplicar</optin>
<option>Dividir</option>
</select>
Valor 2:
<input type="text" name="valor2" size="5" />
<input type="submit" nome="calcularbtn" value="calcular" />
</form>
</BODY>
</HTML>

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
