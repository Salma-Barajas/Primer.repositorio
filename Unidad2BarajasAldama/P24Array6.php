<?php
/*CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los imprime
Salma Lorena Barajas Aldama
3°A Programacion Mat.*/

$AlumnoS=array("Eli amorcito"=>"Mecatronica" , "NatNat"=>"Programacion" , "Kirito"=>"Programacion" , "Euka"=>"Programacion" , "DoubleD"=>"Mecatronica");

echo "** LISTA DE ALUMNOS EN CBTIS 89 **","<br>","<br>";

foreach ($AlumnoS as $nombre => $carrera) {
	echo "El alumno " . $nombre . ", estudia en la especialidad de " . $carrera;
	echo "<br>","<br>";
}
?>