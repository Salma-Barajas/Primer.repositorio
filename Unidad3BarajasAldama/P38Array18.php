<?php
/*CBTIS 89
 Programa con arrays multidimensionales, que con uso de ciclos se organizan los datos de sus filas y columnas
 Salma Lorena Barajas Aldama
 3°A Programacion T.M
*/
 $datos = array(
 	array(10,20,30), array(40,50,60), array(70,80,90));
 echo "NORMAL";
 echo "<br>";
 for ($i=0; $i < 3; $i++) { 
 	for ($j=0; $j < 3; $j++) { 
 		echo $datos[$i][$j]." ";
 	}
 	echo "<br>";
 }
 echo "<br>";
 echo "FILAS A COLUMNAS";
 echo "<br>";
 for ($i=0; $i < 3; $i++) { 
 	for ($j=0; $j < 3; $j++) { 
 		echo $datos[$j][$i]." ";
 	}
 	echo "<br>";
 }



 echo "<br>";
echo "COLUMNAS INVERSAS";
echo "<br>";
for ($i=0; $i < 3; $i++) { 
	for ($j=2; $j >=0; $j--) {
        
		echo $datos[$i][$j]." ";
	}
	echo "<br>";
}


echo "<br>";
echo "FILAS INVERSAS";
echo "<br>";
for ($i=0; $i < 3; $i++) { 
	for ($j=0; $j < 3; $j++) {
	  rsort($datos); 
		echo $datos[$i][$j]." ";
	}
	echo "<br>";
}

echo "<br>";
echo "ESPEJO INVERSO";
echo "<br>";
for ($i=0; $i < 3; $i++) { 
	for ($j=0; $j < 3; $j++) {
	    
		echo $datos[$j][$i]." ";
	}
	echo "<br>";
}
?>