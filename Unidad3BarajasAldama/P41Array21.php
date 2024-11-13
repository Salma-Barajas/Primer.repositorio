<?php
/*CBTIS 89
 Programa que almacena el arreglo $Compras con el valor de 6 compras, posteriormente en otros arreglos se almacena informacion de acuerdo a las siguientes condiciones:
 En un arreglo llamado $Descuentos:
	 Compra<300 == 0
	 Compra>300 && <= 1000 == 10%
	 Compra >1000 && <= 2500 == 15%
	 Compra >2500 && <= 5000 == 20%
	 Compra>5000==25%
 En el arreglo $Total se coloca la diferencia entre la compra y el descuento, y en el arreglo $Porcentaje colocar el porcentaje que se le aplico de descuento
 Salma Lorena Barajas Aldama
 3°A Programacion T.M*/

 $Compra=array(65, 150, 460, 1300, 3400, 5500);
 $Descuento=array();
 $Total=array();
 $Porcentaje=array();
 $Dtotal;
 
echo "Compra " . "-----" . " Descuento " . "-----" . " Total ". "-----" . " Porcentaje ";
echo "<br>","<br>";
 for ($i=0; $i < count($Compra); $i++) { 
 	if ($Compra[$i]<300) {
 		$Descuento[$i]=0;
 		$Porcentaje[]=0;
 	} elseif ($Compra[$i]>300 && $Compra[$i]<=1000) {
 		$Descuento[$i]=0.10;
 		$Porcentaje[]=10;
 	} elseif ($Compra[$i]>1000 && $Compra[$i]<=2500) {
 		$Descuento[$i]=0.15;
 		$Porcentaje[]=15;
 	} elseif ($Compra[$i]>2500 && $Compra[$i]<=5000) {
 		$Descuento[$i]=0.20;
 		$Porcentaje[]=20;
 	} elseif ($Compra[$i]>5000) {
 		$Descuento[$i]=0.25;
 		$Porcentaje[]=25;
 	}
 $Dtotal=$Compra[$i]*$Descuento[$i];
 $Total[$i]=$Compra[$i]-$Dtotal;
 echo "$" . $Compra[$i] . "--------------" . $Descuento[$i] . "-----------" . "$" . $Total[$i] . "----------" . $Porcentaje[$i] ."%";
 echo "<br>";
 }
 ?>