<?php
/* CBTIS 89
  Programa que ordena, agrega y elimina datos de forma ascendente y descendente
  Salma Lorena Barajas Aldama
  3°A Programacion Mat.
*/

$arraynombres = array("Eli", "Nath", "Kirito", "Lloyd", "Cole","Kai" );
$longitud=count($arraynombres);
//orden ascendente
echo "ORDEN ASCENDENTE (ciclo for)";
echo "<br>";
sort($arraynombres);

for ($i=0; $i < $longitud; $i++) { 
	echo $arraynombres[$i];
	echo "<br>";
}

array_push($arraynombres, "Jay", "Ren", "Manjiro", "Shoto");
unset($arraynombres[2]);
unset($arraynombres[6]);
$longitud=count($arraynombres);


echo "<p>";

//orden descendente
echo "ORDEN DESCENDENTE (ciclo for)";
echo "<br>";
rsort($arraynombres);

for ($i=0; $i < $longitud; $i++) { 
	echo $arraynombres[$i];
	echo "<br>";
}

echo "<br>";
echo "El numero actual de elementos: ".$longitud;
?>
