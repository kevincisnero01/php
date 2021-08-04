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
	private $alphabet;

	public function __construct($alphabet)
	{
		$this->alphabet = $alphabet;
	}

	public function build($input)
	{	
		//$input = str_split($input); count($input)//return implode('',$output);
		for ($i=0; $i < strlen($input); $i++) { 
			$input[$i] = $this->transfomCharacter($input[$i]);
		}
		return $input;
	}

	public function transfomCharacter($char)
	{
		//CHECK CAPITAL LETTER
		$isUpper = ($char == strtoupper($char));

		//SEARCH IN ALPHABET
		$pos = array_search(strtolower($char), $this->alphabet);

		//CHECK A
		// El triple igual === se utiliza para asegurnos de forma estricta que el valor devuelto sea igual 'false' y no algo parecido como lo es un cero '0', en el caso de la letra 'a' nos devuelve 0, por ende nos daria un error si lo comparamoos solo con 2 iguales ==
		if($pos === false)
			return $char;

		//CHECK Z
		if($pos == count($this->alphabet)-1)
			$pos = 0;
		else
			$pos++;

		//CONVERT CHARACTER
		if($isUpper)
			return strtoupper($this->alphabet[$pos]);
		else
			return $this->alphabet[$pos];
	}

	public function print($title,$input)
	{
		if(is_array($input)){
			echo"<b>$title:</b> = [";
			foreach ($input as $key => $value) {
				echo "$value, ";
			}
			echo"]";
		}else{
			echo"<b> $title:</b> = [$input]";
		}
	}

}

$alphabet = str_split("abcdfeghijklmnñopqrstuvwxyz");
$string = new ChangeString($alphabet);
$string->print('ABECEDARIO',$alphabet);
echo"<br>";
$input1 = "123 abcd*3";
$string->print('ENTRADA1',$input1);
$output1 = $string->build($input1);
$string->print('SALIDA1',$output1);
echo"<br>";
$input1 = "***Casa 52*";
$string->print('ENTRADA2',$input1);
$output1 = $string->build($input1);
$string->print('SALIDA2',$output1);
echo"<br>";
$input1 = "***Casa 52Z";
$string->print('ENTRADA3',$input1);
$output1 = $string->build($input1);
$string->print('SALIDA3',$output1);
?>
</body>
</html>