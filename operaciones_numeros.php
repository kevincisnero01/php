<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Operaciones con Numeros</h1>
<?php 
echo"<br><b>1.- Crea una variable y asígnale el valor 15</b><br>";
$var1 = 15;
echo"<b>Resultado:</b>La \$var1 tiene el valor de $var1<br>";

echo"<br><b>2.- Comprueba si este número ($var1) es divisible entre 3.</b><br>";
$result = ($var1 % 3 == 0) ? "SI" : "NO";
echo"<b>Resultado:</b> $result<br>";

echo"<br><b>3.- Multiplica este número ($var1) por 21</b><br>";
$var1 = $var1*21;
echo"Resultado: $var1<br>";

echo"<br><b>4.- Añade cien veces el valor '1' a la variable ($var1).</b><br>";
for ($i=0; $i < 100 ; $i++) { 
	$var1 +=1;
}
echo"Resultado: $var1<br>";

echo"<br><b>5.- Consigue la raíz del número resultante y muestra el resultado sin decimales(número entero)..</b><br>";
$raiz = round(sqrt($var1));
echo "Resultado: $raiz <br/>";

echo"<br><b>6.- Convierte este número ($var1) en texto y añádele la cadena 'code' en la penúltima posición
(ejemplo: \$var=341   Resultado: \$var=34code1)</b><br>";
//Opcion1
$num_array = str_split(strval($raiz));
$num_array[count($num_array)-1] = "code".end($num_array);
echo"Resultado: ".$resultado = implode("",$num_array);

/*
//Opcion2
$arr = str_split(strval($var1));
for ($i=0; $i < count($arr); $i++) { 
	echo ($i == count($arr)-1) ?  $arr[$i] = 'code'.$arr[$i] : $arr[$i];
}
*/

/*
//Opcion3
$num_text = strval($raiz);
$array_string = str_split($num_text);
$ultimo_valor = $array_string[count($array_string)-1];
$array_string[count($array_string)-1] = "code";
array_push($array_string, $ultimo_valor);
$array_en_texto = implode("", $array_string);
echo "Respuesta 6: " . $array_en_texto."<br/>";
*/

?>
</body>
</html>