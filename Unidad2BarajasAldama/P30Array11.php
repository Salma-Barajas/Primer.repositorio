<?php
/* CBTIS 89
 Programa de array que guarda otros valores 
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>