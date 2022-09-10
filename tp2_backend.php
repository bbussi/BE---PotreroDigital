<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP2</title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO 2</h1>
    <h2>Ejercico 1</h2>
    <?php
    $ne1 = 5;
    if ($ne1 > 0) {
      echo "$ne1 es un número positivo";
    }
    ?>
    <h2>Ejercicio 2</h2>
    <?php
    $ne2 = 8;
    if ($ne2>1 && $ne2<10) {
      echo "$ne2 es mayor a 1 y menor a 10";
    }
    ?>
    <h2>Ejercicio 3</h2>
    <?php
    $ne3 = 15;
    if ($ne3<2 || $ne3>10) {
      echo "$ne3 es menor que 2 o mayor que 10";
    }
    ?>
    <h2>Ejercicio 4</h2>
    <?php
    $numero1 = 10;
    $numero2 = 5;
    if ($numero1 > $numero2) {
      echo "suma=".$numero1 + $numero2;
      echo  "<br>";
      echo "resta=".$numero1 - $numero2;
    } elseif ($numero1 < $numero2) {
      echo "multplicacion=".$numero1 * $numero2;
      echo  "<br>";
      echo "division=".$numero1 / $numero2;
      echo  "<br>";
      echo "resto=".$numero1 % $numero2;
    } else {
      echo "Los números ingresados son iguales";
    }
    ?>
  </body>
</html>
