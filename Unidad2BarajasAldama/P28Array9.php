<?php
/* CBTIS 89
 Programa que crea arreglo asociativo de ropa
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/

$Ropa=array("Playeras"=>"100" , "Camisas"=>"250" , "Pantalones de mezclilla"=>"300" , "Bermudas"=>"200");

echo "** LISTA DE ROPA Y SUS PRECIOS **","<br>","<br>";

foreach ($Ropa as $Tipos => $Precio) {
	echo "" . $Tipos . ":" . $Precio	;
	echo "<br>","<br>";
}