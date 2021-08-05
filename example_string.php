<?php
//Ordenar palabras alfabéticamente en español
//Esta es la forma más sencilla de ordenar alfabéticamente palabras en español.
//La función tiene en cuenta los acentos y las «ñ» característicos de este idioma.

function sortSpanish($a, $b){
	$alphabet = 'aábcdeéfghiíjklmnñoópqrstuúvwxyz'; 
	$a = mb_strtolower($a); 
	$b = mb_strtolower($b);

	for ($i = 0; $i < mb_strlen($a); $i++) {
		if ($i > mb_strlen($b)) {
			return 1;
		}
		if (mb_strpos($alphabet, mb_substr($a, $i, 1)) > mb_strpos($alphabet, mb_substr($b, $i, 1))) {
			return 1;
		} else {
			return -1;
		}
	}
}

$words = array('atención', 'Alabar', 'Álava', 'Apero');
usort($words , 'sortSpanish');

foreach ($words as $word) {
	echo $word."<br/>";
}

?>