<HTML>
<HEAD>
<title>CALCULADORA2.1</title>
</HEAD>
<BODY>
<form method="post" action="calculadora.php">
Valor1
<input type="text" name="valor1" size="5" />
<select name="tipo">
<option value="somar" selected="selected">Somar</option>
<option value="subtrair">Subitrair</option>
<option value="multiplicar">Multiplicar</optin>
<option value="dividir">Dividir</option>
</select>
Valor2:
<input type="text" name="valor2" size="5" />
<input type="submit" nome="calcularbtn" value="calcular" />
</form>
</BODY>
</HTML>

<?php
require_once('calc.php');
?>