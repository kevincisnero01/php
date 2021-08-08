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

function checkOpen($char)
{
	return in_array($char, ['(','[','{']);
}

function getPar($simbol)
{
	$parSimbol = [
		'(' => ')', 
		'[' => ']', 
		'{' => '}',
		')' => '(',
		']' => '[',
		'}' => '{'
	];

	return $parSimbol[$simbol];
}

function checkPar($imput){

	$stack = array();

	foreach ($imput as $key => $value) {

		if(checkOpen($value)){

			$stack[$key] = $value;

		}else{

			//GET PAR
			$char = getPar($value);	//echo"<b>$value = $char</b><br>";
			//SEARCH PAR
			$pos = array_search($char, $stack);
			if($pos !== false){ //TRUE PAR
				$stack[$pos] .= "$value";  //POR ELIMINAR
				unset($stack[$pos]);
			}else{ //FAIL PAR
				$stack[$key] = $value;
			}	
		}

	}

	$count = count($stack);
	return  $result = ($count === 0) ? "sucessful[$count]" : "fail[$count]";
}

//DATA STRING TEST
$imp0 = "([){]";
$imp1 = "[(]";
$imp2 = "[()]{}{[()()]()}";
$imput = str_split($imp0);	

echo "<b>Imput:</b><br>"; 
foreach ($imput as $key => $value) {
	echo "[$key] = $value <br>";
}

echo "<br><b>Verification: </b>";
echo checkPar($imput);

?>

<p>
<b>Version3:</b>
<li>Solucion Mejorada</<li>
<li>Funciona para muchos casos mas casos</li>	
<li>Pero cuando el imput es demasiado variante falla.</li>
</p>
</body>
</html>