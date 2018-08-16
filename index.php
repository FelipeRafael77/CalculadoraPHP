<html>

<head>

	<title>CalcPHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/calc.css">

</head>

<body>

	<form method="post" action="">

		Valor 1:

		<input type="text" name="valor1" size="5" />

		<br><br><select name="tipo">

			<option selected="selected">Somar</option>

			<option>Subtrair</option>

			<option>Multiplicar</option>

			<option>Dividir</option>

		</select>

		<br><br>Valor 2:

		<input type="text" name="valor2" size="5" />

		<br><br><input type="submit" name="calcularbnt" value="Calcular" />

	</form>

<div class="res">

<?php


$valor1 = $_POST['valor1'];

$valor2 = $_POST['valor2'];

$tipo = $_POST['tipo'];


switch($tipo)

{

       case 'Somar': $resultado = $valor1 + $valor2; break;

       case 'Subtrair': $resultado = $valor1 - $valor2; break;

       case 'Multiplicar': $resultado = $valor1 * $valor2; break;

       case 'Dividir': $resultado = $valor1 / $valor2; break;

}


echo "O resultado é : $resultado";


?>

</div>
</body>

</html>



