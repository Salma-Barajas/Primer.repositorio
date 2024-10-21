<?php
/* CBTIS 89 
 Programa que almacena los nombres de 6 personas en un arreglo por medio de un ciclo for
 Salma Lorena Barajas Aldama
 3°A Programacion Mat*/
 $arraynombres = array("Ren Amamiya", "Cole Brookstone", "Twilight Sparkle", "Robin", "Koko");
 $longitud=count($arraynombres);

 for ($i=0; $i < $longitud ; $i++) { 
 	echo $arraynombres[$i];
 echo "<br>";
 }
 ?>