<?php
/* CBTIS 89
 Programa que utiliza un array para mostrar numeros pares e impares por separado del 1 al 100
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/
$numeros=array();
 for ($i=1; $i <= 100 ; $i++) { 
 	$numeros[]=$i;
 }
 echo "PARES";
 echo "<br>";
 foreach ($numeros as $numero) {
	if ($numero%2==0) {
       echo "",$numero;
       echo "<br>";
	} 
 }
 echo "<br>";
 echo "<br>";
 echo "IMPARES";
 foreach ($numeros as $numero) {
 	if ($numero%2!=0) {
 		echo $numero . "\n";
 	}
 }
?>



