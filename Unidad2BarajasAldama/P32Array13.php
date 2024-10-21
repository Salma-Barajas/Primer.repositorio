<?php
/* CBTIS 89
 Programa donde se dan de alta 3 productos, agregan productos, ordena de forma ascendente utilizando array
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/

$arrayropa = array("Camisa", "Pantalon", "Cinturon");

//orden ascendente
sort($arrayropa);
var_export($arrayropa);

echo "<p>";

   array_push($arrayropa, "Gorra", "Calcetines");

   foreach($arrayropa as $ropa){
      echo $ropa . " <BR>";
   }

 rsort($arrayropa);
var_export($arrayropa);
?>