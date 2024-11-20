<?php
/* CBTIS 89
 Programa que almacena el nombre de 4 personas en un arreglo, y en otro arreglo multidimensional llamado $Calificaciones almacena sus calificaciones, ademas de guardar el promedio de ellas en otro arreglo e indicar si aprobaron o no
 Salma Lorena Barajas Aldama
 3°A Programacion T.M*/
 echo "CBTIS 89";
 echo "<br>";
 echo "Alumnos" . "------" . "Promedio" . "------" . "Status";
 echo "<br>";

 $Alumnos = array("Luz", "Fer", "Leo", "Ale");

 $Calificaciones= array(
 	array(6,4,5), array(7,9,8), array(7,9,5), array(5,4,6));

 $Promedio=array();
 $Status=array();
 $Suma=array(0);
 for ($i=0; $i < 4; $i++) { 
	#$Suma=$Suma+[$i];
	#$Promedio[]=$Suma/[$j];
     if ($Promedio<=6) {
     	$Status[]="Aprobado";
     } elseif ($Promedio>6) {
     	$Status[]="Reprobado";
     }
    echo "" . $Alumnos[$i] ."-------". $Promedio[$i] ."-------". $Status[$i];
    echo "<br>";
}

 echo "<br>";
 echo "Calificaciones";
 echo "<br>";
 for ($i=0; $i < 4; $i++) { 
 	for ($j=0; $j < 3; $j++) { 
    echo $Calificaciones[$i][$j] . " ";
 	} 
 	echo "<br>";
 }
 ?>