<?php 
	// VARIABLES
	echo "VARIABLES LOCALES"."<br>";
	
	$integer = 2;
	$float = 1.2;
	$isTrue = true;
	$arrayColors = array('Azul','morado','negro');
	$string = "Hola";

	echo $integer;
	echo $float;
	if ($isTrue) {
		echo $arrayColors[0];
		echo $string;	
	}
	echo "<br>";
	echo "VARIABLES GLOBALES"."<br>";

	function variablesGlobales()
	{
		$local= "Soy la variable local";
		echo $GLOBALS["global"];
		echo $local;
	}

	$global="Soy la variable global";

	variablesGlobales();

	echo "<br>";
	echo "VARIABLES SUPER GLOBALES"."<br>";

?>