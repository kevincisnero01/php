<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Numeros Pares a un rango recibidos por GET</h1>
<p>Realizar un programa que muestre todos los números pares entre dos números que le vamos a pasar por la URL mediante el método $_GET</p>
<?php 
	if(isset($_GET['numero1']) && isset($_GET['numero2'])){

		$num1 = isset($_GET['numero1']) ? $_GET['numero1'] : '';
		$num2 = isset($_GET['numero2']) ? $_GET['numero2'] : '';

		if($num1 < $num2){
			$arr = range($num1, $num2);
			for ($i=0; $i < count($arr); $i++) { 
				if($arr[$i] % 2 == 0){
					$arr_par[] = $arr[$i];
				}
			}
			echo"<b>Rango:</b> $num1 y $num2<br><br>";
			$total = count($arr_par);
			echo"<b>Pares[$total]</b>  = ";
			foreach ($arr_par as $key => $value) {
				echo$value;
				if($key != count($arr_par)-1) echo", ";
			}
		}else{
			echo "<p style='color:red;font-weight: bold;'>El primer numero no debe ser mayor que el segundo!!</p>";
		}

	}else{
		echo "<p style='color:red;font-weight: bold;'>Por favor ingrese por la URL 2 numeros para poder procesarlos.<p>";
		echo"<li>El primero debe ser menor que el segundo.</li>";
		echo"<li>Ej: get_pares.php?numero1=1&numero2=20</li>";
	}
?>
</body>
</html>