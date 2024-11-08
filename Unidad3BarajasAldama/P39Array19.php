<?php
/* CBTIS 89
 Programa que almacena informacion de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones: edad<18 -> grupo 1, edad>18&&edad<49 grupo 2, edad>=50 grupo 3
 Salma Lorena Barajas Aldama
 3°A Programacion T.M
*/

$Nombre=array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");

$Edad=array(17,30,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();

echo "Nombre " . " Grupo1 " . " Grupo2 " . " Grupo3";
echo "<br>";
echo "<br>";

for ($i=0; $i < count($Nombre); $i++) { 
	if ($Edad[$i]<18) {
  $Grupo1[$i]=1;
  $Grupo2[$i]=0;
  $Grupo3[$i]=0;
	} elseif ($Edad[$i]>18&&$Edad[$i]<49) {
  $Grupo1[$i]=0;
  $Grupo2[$i]=1;
  $Grupo3[$i]=0;
	} else {
  $Grupo1[$i]=0;
  $Grupo2[$i]=0;
  $Grupo3[$i]=1;
 	}
	echo $Nombre[$i] . "------" . $Edad[$i] . "------". $Grupo1[$i]. "------". $Grupo2[$i]. "------". $Grupo3[$i];
	echo "<br>";
}



/*foreach ($Nombre as $nombres => $Edad) {
  echo "Nombres". $nombres . " Grupo1" . " Grupo2" . " Grupo3";
  echo "<br>", "<br>";
}*/

?>

 
