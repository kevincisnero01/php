<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>PHP</title>
</head>
<body>
<h1>Completar Rango de Numeros v1</h1>
<?php
require_once'helpers.php'; //Es necesario para print_c()

class CompleteRange
{	
	static public function build($input)
	{	
		if(empty($input))
			return [];

		$start = $input[0];
		$end = $input[count($input)-1];
		$output = range($start, $end);

		return $output;
	}

}

$input = [1,2,3,10];
print_c('ENTRADA', $input);

$result = CompleteRange::build($input);
print_c('SALIDA', $result);


?>
</body>
</html>