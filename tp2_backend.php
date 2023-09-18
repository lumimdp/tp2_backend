<?php

$var1 = 6;

if($var1 >= 0) {
	echo "El numero ".$var1." es positivo";
}

echo "<br><br>";

$var2 = 3;

if($var2 >= 1) {
	if($var2 <= 10){
		echo "El numero ".$var2." cumple los requerimentos de ser mayor que 1 y menor que 10";
	} else {
		echo "El numero ".$var2." es mayor que 10";
	}
	
} else {
	echo "El numero ".$var2." es menor que 1";

}

echo "<br><br>";

$var3 = 15;

if($var3 > 10) {	
		
		echo "CORRECTO!! El numero ".$var3." es mayor a 10";

} elseif($var3 < 2){
		
		echo "CORRECTO!! El numero ".$var3." es menor a 2";

} else {
	
	echo "EL NUMERO ".$var3." NO CUMPLE CON LOS REQUISITOS";
		
}

echo "<br><br>";


$numero1 = 5;
$numero2 = 4;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$resto = $numero1 % $numero2;


if($numero1 > $numero2) {
	
	echo $numero1." es mayor que ".$numero2."<br>La suma de ".$numero1." + ".$numero2." es igual a ".$suma."<br>Y la resta de ".$numero1." - ".$numero2." es igual a ".$resta;
	
	
} elseif($numero1 < $numero2) {
	
	echo $numero2." es mayor que ".$numero1."<br>La multiplicacion de ".$numero1." x ".$numero2." es igual a ".$multiplicacion."<br>Y la division de ".$numero1." / ".$numero2." es igual a ".(int) ($division).", quedando de resto ".$resto;
	
} else {
	
	echo "Los números ingresados son iguales";
	
}

?>

