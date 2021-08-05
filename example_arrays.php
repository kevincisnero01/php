<h1>Welcome to world of matrices</h1>
<?php

//UNIDIMENCIONAL
$numbers = [5,2,4,3,1];

$fruits = [ "apple","pineapple","orange"];

$abc = [ 0 => "A", 1 => "B", 2 => "C"];

//BIDIMENCIONAL
$foods = [ 
	"fruits" => [ "apple","pineapple","orange"], 
	"meats" => [ "chicken","beef","pork"]
];

$cars = [
	["Volvo",22,18],
	["BMW",15,13],
	["Saab",5,2]
];


echo"<br><b>FRUITS[1] PRINT FOR</b><br>";
for ($i=0; $i < count($fruits); $i++) { 
	echo $fruits[$i]."<br>";
}

echo"<br><b>CARS[] PRINT SINGLE</b><br>";
echo $cars[0][0]." : ".$cars[0][1]." / ".$cars[0][2]."<br>";

echo"<br><b>CARS[1x2] PRINT FOR</b><br>";
for ($row=0; $row < 3; $row++) { 
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
			for ($col=0; $col < 3; $col++) { 
				echo"<li>".$cars[$row][$col]."</li>";
			}
	echo"</ul>";
}
?>