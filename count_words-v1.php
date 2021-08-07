<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Contar el numero de palabras</h1>
<?php
echo "<b>IMPUT:</b><br>";
$imput = "Tres amigos tigres, comen trigo tres veces en el trigal, los tigres que corren cada dia, comen cada  dia, exploran cada dia haciendo que los tres tigres mejores amigos";
echo $imput."<br><br>";

//Divide El string mediante cualquier numero de comas o caracteres de espacio. lo que incluye " ", \r, \t, \n, y \f
$string_arr = preg_split('/[\s,]+/', trim(strtolower($imput)));
$dictionary = array();

for ($i=0; $i < count($string_arr); $i++) { 

	if(array_key_exists($string_arr[$i], $dictionary)) 
		$dictionary[$word] += 1; 
	else
		$dictionary[$word] = 1;
}

echo "<b>OUTPUT:</b><br>";
echo"<ol>";
foreach ($dictionary as $key => $value) {
	echo"<li>$key  = $value </li>";
}
echo"</ol>";

?>
</body>
</html>