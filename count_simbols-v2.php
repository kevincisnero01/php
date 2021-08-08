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

function checkClose($charOpen,$charClose)
{
	$pars = ['(' => ')', '[' => ']', '{' => '}'];

	return $pars[$charOpen] === $charClose;
}

function checkPar($imput)
{	
	$stack = array();

	foreach ($imput as $key => $value) {
		//VERIFIED SIMBOL: (  [  { 
		if(checkOpen($value))
		{		
			$stack[$key] = $value;

		}else
		{
			$charOpen = array_pop($stack);
			if(!checkClose($charOpen,$value))
				return 'fail['.count($stack)."]";
		}

	}

	$count = count($stack);
	return  $result = ($count === 0) ? "sucessful[$count]" : "fail[$count]";
}

//DATA STRING TEST
$imp0 = "([})";
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
<b>Version2:</b>
<li>Adaptacion de solucion en typescript</<li>
<li>Funciona para muchos casos</li>	
<li>Pero La funcion array_pop no es adecuada cuando el ultimo dato no es del mismo tipo.</li>
</p>
</body>
</html>