<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Mostrar 100 numeros</h1>
<p>Mostrar los 100 primeros números separados por “,” pero que al último número no se le muestre la “,”</p>
<?php 
	$num = 1;
	while($num <= 100)
	{
		echo $num;
		if($num != 100) echo ", ";
		$num++;
	}
?>
</body>
</html>