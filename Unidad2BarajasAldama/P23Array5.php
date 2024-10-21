<?php
/*CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los imprime
Salma Lorena Barajas Aldama
3°A Programacion Mat.*/

$frutas=array("Manzana"=>"25" , "Mango"=>"40" , "Limon"=>"35" , "Naranja"=>"20");

echo "** FRUTERIA DE LA 89 **","<br>","<br>";

foreach ($frutas as $fruta => $precio) {
	echo "El kilo de " . $fruta . " cuesta " . $precio;
	echo "<br>","<br>";
}
?>