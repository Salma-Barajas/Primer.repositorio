<?php
/* CBTIS 89
 Programa que guarda los valores de un array en otros arrays, dependiendo si el numero es positivo o negativo, y posteriormente suma los numeros de cada array
 Salma Lorena Barajas Aldama
 Programacion 3°A T.M
*/

 $arraynumeros=array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);

$arraypositivos= array();
$arraynegativos= array();
$SumaP= 0;
$SumaN= 0;

echo "POSITIVOS Y NEGATIVOS";
echo "<br>","<br>";

for ($i=0; $i < count($arraynumeros); $i++) { 
	if ($arraynumeros[$i] >= 0) {
     $arraypositivos[] = $arraynumeros[$i];
     $SumaP += $arraynumeros[$i];
	} else {
		$arraynegativos[] = $arraynumeros[$i];
		$SumaN += $arraynumeros[$i];
	}
}

echo "NUMEROS POSITIVOS","<br>";
for ($i=0; $i < count($arraypositivos); $i++) { 
	echo $arraypositivos[$i];
	echo "<br>";
}
echo "<br>Suma de positivos: $SumaP<br>";
  
echo "<br>";
echo "NUMEROS NEGATIVOS","<br>";
for ($i=0; $i < count($arraynegativos); $i++) { 
	echo $arraynegativos[$i];
	echo "<br>";
}

echo "<br>Suma de negativos: $SumaN<br>";
?>