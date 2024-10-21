<?php
/*CBTIS 89
 Programa que imprime el numero de billetes de una cantidad almacenada en una variable
 Salma Lorena Barajas Aldama
 3°A Programacion Mat.*/

 $Cheque=9872; $Mil; $R; $Quin; $Doscientos; $Cien; $Cinc; $Veinte; $Diez; $Cinco; $Dos; $U;

 echo "La cantidad del cheque es: ", $Cheque;
 echo "<br>";
 echo "<br>";

 $Mil=floor($Cheque/1000);
 echo "Cantidad de billetes de a mil: ", $Mil;
 echo "<br>";
  
 $R=$Cheque%1000;
 $Quin=floor($R/500);
 echo "Cantidad de billetes de quinientos: ", $Quin;
 echo "<br>";

 $R=$Cheque%500;
 $Doscientos=floor($R/200);
 echo "Cantidad de billetes de doscientos: ", $Doscientos;
 echo "<br>";

 $R=$Cheque%200;
 $Cien=floor($R/100);
 echo "Cantidad de billetes de cien: ", $Cien;
 echo "<br>";

 $R=$Cheque%100;
 $Cinc=floor($R/50);
 echo "Cantidad de billetes de cincuenta: ", $Cinc;
 echo "<br>";

 $R=$Cheque%50;
 $Veinte=floor($R/20);
 echo "Cantidad de billetes de veinte: ", $Veinte;
 echo "<br>";

 $R=$Cheque%20;
 $Diez=floor($R/10);
 echo "Cantidad de monedas de diez: ", $Diez;
 echo "<br>";

 $R=$Cheque%10;
 $Cinco=floor($R/5);
 echo "Cantidad de monedas de cinco: ", $Cinco;
 echo "<br>";

 $R=$Cheque%5;
 $Dos=floor($R/2);
 echo "Cantidad de monedas de dos: ", $Dos;
 echo "<br>";

 $R=$Cheque%2;
 $U=floor($R/1);
 echo "Cantidad de monedas de uno: ", $U;
 echo "<br>";

