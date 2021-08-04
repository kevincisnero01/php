<?php  header('Content-Type: text/html;charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP</title>
</head>
<body>
<h1>Cambiar Cadena de Caracteres v2</h1>
<?php
class ChangeString
{	
	private $input;

	public function __construct($input)
	{
		$this->input = $input;
	}

	public function build()
	{	
		$output = array();
		$abc = str_split(utf8_decode("abcdfeghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ"));
		$str = str_split($this->input);
		
		for ($i=0; $i < count($str); $i++) {
			$indice = array_search($str[$i],$abc);
			if(array_key_exists("$indice",$abc))
				$output[$i] = $abc[$indice+1];
			else
				$output[$i] = $str[$i]; 
		}

		//IMPRIMIR ABC
		echo"<br><b>ABC:</b><br>";
		foreach ($abc as $key => $value) {
			echo $value." ";
		}
		echo"<br><b>Salida:</b><br>";
		//SALIDA
		for ($i=0; $i < count($output); $i++) { 
			echo$output[$i];
		}
	}
}
echo"<b>Entrada:</b><br>";
$input1 = "123abc3";
echo $input2 = "***Casa 52";
$str = new ChangeString($input2);
$str->build();

?>
</body>
</html>
