<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Operaciones con STRING</h1>
<?php 
echo"<br><b>1.- Crea una variable y asígnale el valor 'a-a-r-e-f-a'.</b><br>";
$var = 'a-a-r-e-f-a';
echo"<u>Resultado:</u>La variable '\$var' tiene el valor de $var<br>";

echo"<br><b>2.- Cambia todas las letras 'a' de la cadena por el valor 'tortuga'.</b><br>";
$result = str_replace('a','tortuga',$var);
echo"<u>Resultado:</u> $result<br>";

echo"<br><b>3.- Separa los valores de esta variable en un array. Utiliza el '-' como separador.</b><br>";
$array_string = explode('-', $result);
echo"<u>Resultado:</u><br>";
echo"<pre>"; print_r($array_string); echo"</pre>";

echo"<br><b>4.- Ordena el array obtenido alfabéticamente, en orden descendente.</b><br>";
$alphabet = str_split('aábcdeéfghiíjklmnñoópqrstuúvwxyz'); 
rsort($array_string);

echo"<b>Resultado:</b><br>";
foreach($array_string as $key =>$value){ 
	echo "[$key]$value ";
}

echo"<br><br><b>5.- Crea un nuevo array y añade únicamente de los valores de la anterior array, los que NO contengan la letra 'a'.</b><br>";
//Metodo 1
$array_new = array_filter($array_string, function($val){return !strpos($val,'a'); });

/*
//Metodo 2
$array_new = array();
for ($i=0; $i < count($array_string); $i++) { 
	if(strpos($array_string[$i],'a') == false ) //si no lo encuentra
		$array_new[$i] = $array_string[$i];
}
*/
echo "<b>Resultado:</b> <br/>";
echo"<pre>"; print_r($array_new); echo"</pre>";


echo"<br><b>6.- Muestra por pantalla la dimensión, es decir, cuántos objetos contiene este último array. Este valor debe ser 3.</b><br>";
$count = count($array_new);
echo "<b>Resultado:</b> ".$count;

?>
</body>
</html>