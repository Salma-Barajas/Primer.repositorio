<?php
/* CBTIS 89
 Programa de array que ordena valores de manera ascendiente y descendiente 
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>