<?php
/* CBTIS 89
 Programa que guarda nombres en un array
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/
 //Crear un array con nombres
 $nombres=array("Eli", "Nath", "Kirito", "Sae", "Cole", "Kai", "Lloyd", "Jay");
 //Definir una variable con un nombre
 $nombre="Eli"; //Se puede cambiar este valor para probar con otros nombres

 //Crear un ciclo foreach para que se recorra el array
 foreach ($nombres as $n) {
 	if ($n == $nombre) {
 		echo "Este nombre esta en el array";
 		break; //Sale del ciclo si encuentra el nombre
 	}
 }

