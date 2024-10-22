<?php
/* CBTIS 89
 Realiza un programa que utiliza arrays que posteriormente se unen para almacenar datos,
 asi como agregar datos, y quitar los originales por medio de ciclos, array push y unset
 3°A Programacion Mat.
 Salma Lorena Barajas Aldama
*/

 $Titulo=["LISTA", "DE", "PUBERTOS", "QUE", "CAEN", "BIEN"];
 $string=implode(" ", $Titulo);
 echo $string;
 echo "<br>","<br>";
 $arraynombres= array("Ren", "Lloyd", "Eli", "Nath", "Kai", "Jay", "Twilight", "Cole");
 $longitud=count($arraynombres);
 $arrayapellidos= array("Amamiya","Garmadon","Ávila","Esparza","Smith","Walker","Sparkle","Brookstone");
 $longitud=count($arrayapellidos);


 for ($i=0; $i < $longitud; $i++) { 
    echo $arraynombres[$i], " ", $arrayapellidos[$i];
 	echo "<br>";
 }

 array_push($arraynombres, "Wu");
 array_push($arrayapellidos, "Garma");
 unset($arraynombres[2]);
 unset($arrayapellidos[2]);
?>