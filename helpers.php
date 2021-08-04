<?php

//IMPRIME ARREGLOS O STRING
function print_c($title,$input)
{
	if(is_array($input)){
		echo"<b>$title</b> = [";
		foreach ($input as $key => $value) {
			echo $value;
			echo ($key+1 < count($input)) ? ", " : "";
		}
		echo"] ";
	}else{
		echo"<b> $title</b> = [$input]";
	}
}

?>