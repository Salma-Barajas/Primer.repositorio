<?php
/* CBTIS 89
 Programa que contiene arreglos con datos con los que se realizan operaciones,
 cuyos resultados posteriormente se guardan en otro arreglo
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.*/

 echo "SUMA ENTRE ARREGLOS";
 echo "<br>";

 $array1=[10,20,30,40,50];
 $longitud=count($array1);
 $array2=[3,7,6,15,18];
 $longitud=count($array2);
 
 for ($i=0; $i < $longitud; $i++) { 
  $array3[$i]=$array1[$i] + $array2[$i];
  echo $array1[$i], "+", $array2[$i], "=", $array3[$i];
  echo "<br>";
    }


 echo "<br>";
 echo "RESTA ENTRE ARREGLOS";
 echo "<br>";
 
 for ($i=0; $i < $longitud; $i++) { 
 	$array4[$i]=$array1[$i] - $array2[$i];
  echo $array1[$i], "-", $array2[$i], "=", $array4[$i];
  echo "<br>";
 }
 
 echo "<br>";
 echo "MULTIPLICACION ENTRE ARREGLOS";
 echo "<br>";
 
 for ($i=0; $i < $longitud; $i++) { 
 	$array5[$i]=$array1[$i] * $array2[$i];
  echo $array1[$i], "X", $array2[$i], "=", $array5[$i];
  echo "<br>";
 }

 echo "<br>";
 echo "DIVISION ENTRE ARREGLOS";
 echo "<br>";
 
 for ($i=0; $i < $longitud; $i++) { 
 	$array6[$i]=$array1[$i] / $array2[$i];
  echo $array1[$i], "/", $array2[$i], "=", $array6[$i];
  echo "<br>";
 }
 ?>