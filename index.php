<!DOCTYPE html>
<html>
<head>
<title>Calculadora Básica em PHP</title>
<meta charset="utf-8">
<script type="text/javascript" src="js\campotexto.js"></script>
<link rel="stylesheet" type="text/css" href="css\calc.css">
<center>
<h1>CalcPHP</h1>
<form name="f1"><br>
<input type="text" name="txtcaixa1">
<br>
<input type="text" name="txtcaixa2" value="0">
<br>
<br>
<input type="button" class="clear" onclick="document.f1.txtcaixa2.value ='0'" value="CE">
<input type="button" class="clear" onclick="document.f1.reset(); blocdel = false;" value="C">
<input type="button" class="clear" onclick="deletecarac()" value="◄">
 
<input type="button" class="divisao" onclick="divisao('/')" value="÷">
<br>
<input type="button" onclick="escrever(this.value)" value="7">
<input type="button" onclick="escrever(this.value)" value="8">
<input type="button" onclick="escrever(this.value)" value="9">
<input type="button" class="multiplicacao" onclick="multiplicacao('*')" value="×">
<br>
<input type="button" onclick="escrever(this.value)" value="4">
<input type="button" onclick="escrever(this.value)" value="5">
<input type="button" onclick="escrever(this.value)" value="6">
<input type="button" class="subtracao" onclick="subtracao('-')" value="-">
<br>
<input type="button" onclick="escrever(this.value)" value="1">
<input type="button" onclick="escrever(this.value)" value="2">
<input type="button" onclick="escrever(this.value)" value="3">
<input type="button" class="soma" onclick="soma('+')" value="+">
<br>
<input type="button" class="maismenos" onclick="maismenos()" value="±">
<input type="button" onclick="escrever(this.value)" value="0">
<input type="button" onclick="escrever('.')" value=".">
<input type="button" class="igual" onclick="calcular()" value="=">
<br>
</form>
</center>
</body>
</head>
</html>

