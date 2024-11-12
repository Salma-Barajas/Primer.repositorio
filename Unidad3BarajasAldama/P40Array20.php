<?php
/* CBTIS 89
 Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
 En el primer array iran los numeros pares, en el segundo van los impares y en el tercero se sumaran
 Salma Lorena Barajas Aldama
 3°A Programacion T.M
*/

/*1*/ $ArrayP=array();
/*2*/ $ArrayI=array();
 $ArrayS=array();

echo "ArrayPares " . "-----" . " ArrayImpares " . "-----" . " Suma ";
echo "<br>";

 for ($i=150; $i <=201 ; $i++) { 
 	if ($i%2==0) {
        $ArrayP[]=$i;
 	} else {
 		$ArrayI[]=$i;
 	}
 }

 for ($i=0; $i < count($ArrayP); $i++) { 
    $ArrayS[]=$ArrayP[$i]+$ArrayI[$i];
    echo $ArrayP[$i] . "--------------------" . $ArrayI[$i] . "----------------" . $ArrayS[$i];
    echo "<br>";
 }


?>
