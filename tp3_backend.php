<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP3</title>
  </head>
  <body>
    <h1>TRABAJO PRACTICO 3</h1>
    <h2>Ejercicio 1</h2>
    <h3>Mostrar los números del 1 al 100</h3>
    <?php
     for ($i=1; $i <101 ; $i++) {
       print "<p>$i</p>\n";
     }
    ?>
    <h2>Ejercicio 2</h2>
    <h3>Mostrar los números del 100 al 1</h3>
    <?php
    for ($i=100; $i>0  ; $i--) {
      print "<p>$i</p>\n";
    }
    ?>
    <h2>Ejercicio 3</h2>
    <h3>Mostrar los números pares del 1 al 100</h3>
    <?php
    for ($i=2; $i <101 ; $i=$i+2) {
      print "<p>$i</p>\n";
    }
    ?>
    <h2>Ejercicio 4</h2>
    <h3>Mostrar los números impares del 1 al 100</h3>
    <?php
    for ($i=1; $i <101 ; $i=$i+2) {
      print "<p>$i</p>\n";
    }
    ?>
    <h2>Ejercicio 5</h2>
    <h3>Mostrar la suma de los números de 1 a 20</h3>
    <?php
    $suma=0;
    for ($i=0; $i <20 ; $i++) {
      $suma=$suma+$i+1;
    }
    print "<p>$suma</p>";
    ?>
    <h2>Ejercicio 6</h2>
    <h3>Mostrar la suma de los números pares de 1 a 20</h3>
    <?php
    $suma=0;
    for ($i=0; $i <20 ; $i=$i+2) {
      $suma=$suma+$i+2;
    }
    print "<p>$suma</p>";
    ?>
  </body>
</html>
