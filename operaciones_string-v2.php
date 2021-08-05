<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Operaciones con STRING v2 </h1>
<?php 
echo"<br><b>1.- Crea una variable y asígnale el valor 'Comer algas es realmente sano'.</b><br>";
$var = 'Comer algas es realmente sano';
echo"<u>Resultado:</u>La variable '\$var' tiene el valor de <b>$var</b><br>";

echo"<br><b>2.- Determina la posición de la palabra 'algas' en la cadena.</b><br>";
$pos = strpos($var, 'algas');
echo"<u>Resultado:</u> $pos <br>";

foreach (str_split($var) as $key => $value) {
	echo ($pos == $key) ? "<b>[$key]$value </b>" : "[$key] = $value ";
}

echo"<br><br><b>3.- Reemplaza la palabra 'realmente' por la palabra 'muy'.</b><br>";
$result = str_replace('realmente','muy',$var);
echo"<u>Resultado:</u> $result<br>";

echo"<br><b>4.- Comprueba si en la cadena existe la palabra 'anacardo'.</b><br>";
$response = strpos($var, 'anacardo') ? 'SI' : 'NO';
echo"<b>Resultado:</b> $response<br>";

echo"<br><br><b>5.- Invierte el orden del texto.</b><br>";
$string_inversa = strrev($result);
echo "<b>Resultado:</b> $string_inversa<br/>";

echo"<br><b>6.- Cuenta cuántas vocales 'e' hay en la cadena..</b><br>";
$count_e = 0;
for ($i=0; $i < strlen($result); $i++) { 
	($result[$i] == 'e') ? $count_e++ : '';
}
echo "<b>Resultado: $count_e</b> ";

?>
</body>
</html>