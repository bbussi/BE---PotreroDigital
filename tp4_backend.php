<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP4</title>
  </head>
  <body>
    <h1>TRABAJO PRÁCTICO 4</h1>
    <h2>Ejercicio 1</h2>
    <h3>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
    <?php
    $matriz = range(2,10,2);
    foreach ($matriz as $valor){
      print "<p>$valor</p>";
    }
    ?>
    <h2>Ejercicio 2</h2>
    <h3>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r().</h3>
    <?php
    $matriz = ["Pedro","Ana","34","1",];
    print "<pre>\n";
    print_r ($matriz);
    print "<pre>\n";
    ?>
    <h2>Ejercicio 3</h2>
    <h3>Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro Apellido: Torres Dirección: Av. Mayor 3703 Teléfono: 1122334455</h3>
    <?php
    $matriz = ['Nombre'=>"Pedro",'Apellido'=>"Torres",'Direccion'=>"Av.Mayor 3703",'Telefono'=>"1122334455",];
    print "<pre>\n";
    print_r ($matriz);
    print "<pre>\n";
    ?>
    <h2>Ejercicio 4</h2>
    <h3>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3>
    <?php
    $matriz = ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago",];
    $i=0;
    foreach ($matriz as $valor) {
      print "<pre>\n";
      print "La cuidad con el indice $i tiene el nombre $valor";
      print "<pre>\n";
      $i++;
    }
    ?>
    <h2>Ejercicio 5</h2>
    <h3>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. Ejemplo: El índice de Madrid es MD.</h3>
    <?php
    $matriz = ['MD'=>"Madrid",'BCL'=>"Barcelona",'LD'=>"Londres",'NY'=>"New York",'LA'=>"Los Angeles",'CCG'=>"Chicago",];
    foreach ($matriz as $indice => $valor) {
      print "<pre>\n";
      print "La cuidad con el indice $indice tiene el nombre $valor";
      print "<pre>\n";
    }
    ?>
  </body>
</html>
