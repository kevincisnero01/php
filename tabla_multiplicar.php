<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>1.-Tabla de multiplicar de un número pasado por GET</h1>
<p><b>Intrucciones: </b>Ingrese al final de la URL. tabla_multiplicar.php?numero=[numero deseado]</p>
<?php 
if(isset($_GET['numero']))
{
	$number = $_GET['numero'];
	echo"<b>Resultado: Tabla x $number</b><br>";
	for ($i=1; $i <= 10; $i++) { 
		echo"$number x $i  = ".($i*$number)."<br>";
	}

}else{
	echo"<b>Resultado:</b> No ha ingresado un numero todavia...";
}
?>
</body>
</html>