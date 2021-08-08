<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>Verificar si cada simbolo de apertura tiene sus respectivo par de cierre</h1>
<p>Dato un string formado por (), [] y {} escribe un programa que indique si los pares correspondientes son correctos.</p>
<?php
echo "<b>Imput:</b><br>"; 
$imp0 = "(()())";
$imput = str_split($imp0);
foreach ($imput as $key => $value) {
	echo "[$key] = $value <br>";
}

echo "<br><b>Process:</b><br>";
$stack = array();
for ($i=0; $i < count($imput); $i++) { 

	if($imput[$i] == '(') {

		$stack[] = "(";
		$imput[$i] = null;

	}elseif($imput[$i] == ')'){

		$pos = array_search('(', $stack);
		if($pos !== false){ 
			$stack[$pos] .= ')';
			$imput[$i] = null;
		}

	}
}
echo"<br>";
echo "<br><b>Output:</b><br>";
foreach ($stack as $key => $value) {
	echo "[$key] = $value <br>";
}

echo "<br><b>¿Imput Vacio?: </b>";
echo (empty($imput)) ? "SI" : "NO";
echo"<br>";
foreach ($imput as $key => $value) {
	echo "[$key] = $value <br>";
	if(empty($value)) unset($imput[$key]);
}


?>

<p>
<b>Version1:</b>
<li>Solo cuenta parentesis</<li>
<li>Verificar array vacios</li>	
</p>

</body>
</html>