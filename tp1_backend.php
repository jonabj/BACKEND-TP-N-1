<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $Saludo="Hola mundo";
  echo $Saludo;
  ?>

  <hr>
  <?php
  echo "Suma: ";
  $suma="12+12=";
  echo "$suma";
  $numero1 = 12;
  $numero2 = 12;

  echo $numero1 + $numero2 ;
 ?>

  <hr>
  <?php
  echo "Divicion: ";
  $divicion= "33/24=";
  echo $divicion;
  $numero1 = 33;
  $numero2 = 24;
  echo $numero1 / $numero2 ;
  ?>
   <hr>


  <?php

  echo "Multiplicacion: ";
  $multiplicacion= "955*24=";
  echo $multiplicacion;
  $numero1 = 955;
  $numero2 = 24;
  echo $numero1 * $numero2 ;
  ?>
  <hr>


  <?php

  echo "Resta: ";
  $resta= "1955-654=";
  echo $resta;
  $numero1 = 1955;
  $numero2 = 654;
  echo $numero1 - $numero2 ;
  ?>

  <hr>
  <?php
  echo "32° Celsius a Fahrenheit : ";
  $gradosCelsius= 32 ;
  echo $gradosCelsius * (9 / 5) +32;
  ?>
  <hr>
  <?php
  echo "55° Fahrenheit a Celsius:";
  $gradosFahrenheit= 55;
  echo ($gradosFahrenheit - 32) * 5/9;
   ?>
   <hr>
   <?php
   echo "Calculo de perimetro de un rectangulo L:longitud:12 y W:ancho:18= (L*2)+(W*2)=";
   $L=12;
   $W=18;
   echo ($L*2)+($W*2);?>
   <hr>
   <?php
    echo "Calculo del area de un rectangulo cuando su base es de B:12cm por altura A:12cm =";
    $B= 18;
    $A= 12;
    echo $B*$A;
    ?> <hr>
    <?php
    echo "Calculo de perimetro de un circulo con su radio de R:30cm =    P=";
    $R=30;
    $π=3.14;
    echo (2*$π)*$R;
     ?>
     <hr>
     <?php
     echo "Calculo del area de un circulo de R:30cm=  A=";
     $R=30;
     $π=3.14;
     echo $π*($R*$R);
      ?>
</body>
</html>
