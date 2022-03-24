<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
<h1>CLEAR PAR - Limpiar parentesis</h1>
<?php
require_once('helpers.php');
/*
ESTADOS:
'parStart': Es el estado inicial, cuando esta esperando un parentesis de cierre
'end' : Es el estado final, cuando se completo el par de parentesis
*/
	class ClearPar
	{
		private $state;

		static function build($input)
		{
			$state = 'parStart';
			$output = '';

			for ($i=0; $i < strlen($input); $i++) { 
				if($state == 'parStart' && $input[$i] == '(' ){
					$state = 'parEnd';
				}elseif($state =='parEnd' && $input[$i] == ')'){
					$output .= '()';
					$state = 'parStart';
				}
			}

		return $output;
		}
	}

	$input1 = "()())()";
	$output1 = ClearPar::build($input1);
	print_c('ENTRADA',$input1);
	print_c('SALIDA',$output1); //Esperada: '()()()''
	echo"<br>";

	$input2 = "()(()";
	$output2 = ClearPar::build($input2);
	print_c('ENTRADA',$input2);
	print_c('SALIDA',$output2);//Esperada: '()()''
	echo"<br>";

	$input3 = ")(";
	$output3 = ClearPar::build($input3);
	print_c('ENTRADA',$input3);
	print_c('SALIDA',$output3);//Esperada: ''
	echo"<br>";

	$input4 = "((()";
	$output4 = ClearPar::build($input4);
	print_c('ENTRADA',$input4);
	print_c('SALIDA',$output4);//Esperada: '()'
	echo"<br>";
?>
</body>
</html>