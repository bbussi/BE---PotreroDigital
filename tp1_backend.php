<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO 1</h1>
    <h2>Ejercicio 1</h2>
    <?php
    echo "Hola Mundo";
    ?>
    <h2>Ejercicio 2</h2>
    <?php
    $saludo="Hola Mundo";
    echo $saludo;
    ?>
    <h2>Ejercicio 3</h2>
    <?php
    $n1 = 10;
    $n2 = 5;
    echo "<b>Datos:</b>";
    echo "<br>";
    echo "Numero 1: ".$n1;
    echo "<br>";
    echo "Numero 2: ".$n2;
    echo "<br>";
    echo "<br>";
    echo "<b>Operaciones:</b>";
    echo "<br>";
    echo "Suma= ".$n1+$n2;
    echo "<br>";
    echo "Resta= ".$n1-$n2;
    echo "<br>";
    echo "Multiplicacion= ".$n1*$n2;
    echo "<br>";
    echo "Division= ".$n1/$n2;
    echo "<br>";
    echo "Resto= ".$n1%$n2;
    ?>
    <h2>Ejercicio 4</h2>
    <?php
    $tempg = 20;
    $tempf = $tempg*9/5 +32;
    echo "20 grados en Farenheit: ".$tempf."°F";
    ?>
    <h2>Ejercicio 5</h2>
    <h3>Rectangulo</h3>
    <?php
     $base = 18;
     $altura = 12;
     $perimetroR = $base*2 + $altura*2;
     $areaR = $base * $altura;
     echo "<b>Datos: </b>";
     echo "<br>";
     echo "Base= ".$base." cm";
     echo "<br>";
     echo "Altura= ".$altura." cm";
     echo "<br>";
     echo "<br>";
     echo "<b>Resultados: </b>";
     echo "<br>";
     echo "Perimetro= ".$perimetroR." cm";
     echo "<br>";
     echo "Area= ".$areaR." cm2";
    ?>
    <h3>Circulo</h3>
    <?php
    $radio = 30;
    $perimetroC = 3.14*($radio*2);
    $areaC =  3.14*($radio**2)/4;
    echo "<b>Datos: </b>";
    echo "<br>";
    echo "radio= ".$radio." cm";
    echo "<br>";
    echo "<br>";
    echo "<b>Resultados: </b>";
    echo "<br>";
    echo "Perimetro= ".$perimetroC." cm";
    echo "<br>";
    echo "Area= ".$areaC." cm2";
    ?>
  </body>
</html>
