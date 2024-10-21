<?php
/*CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los imprime
Salma Lorena Barajas Aldama
3°A Programacion Mat.*/

$equipo=array("portero"=>"Tulio Triviño" , "defensa"=>"Juanin" , "medio"=>"Juan Carlos Bodoque" , "delantero"=>"Policarpio");

echo "** SELECCION NACIONAL DE 31 MINUTOS **","<br>","<br>";

foreach ($equipo as $posicion => $jugador) {
	echo "El Jugador " . $jugador . " es el " . $posicion;
	echo "<br>","<br>";
}
?>