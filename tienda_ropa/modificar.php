<?php
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda_potrero");

$id=$_GET['id'];

$consulta = "SELECT*FROM ropa WHERE id=$id";

$respuesta=mysqli_query($conexion, $consulta);

$datos=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
  </head>
  <body>
    <?php
    $tipo_de_prenda=$datos["tipo_de_prenda"];
    $marca=$datos["marca"];
    $talle=$datos["talle"];
    $precio=$datos["precio"];
    $imagen=$datos["imagen"];
    ?>
    <h2>Modificar</h2>
    <p>Ingrese los nuevos datos de la prenda</p>

    <form action="" method="post" enctype="multipart/form-data">
      <label>Tipo de prenda</label>
      <input type="text" name="tipo_de_prenda" placeholder="Tipo de prenda" value="<?php echo"$tipo_de_prenda";?>">
      <label>Marca</label>
      <input type="text" name="marca" placeholder="Marca" value="<?php echo"$marca";?>">
      <label>Talle</label>
      <input type="text" name="talle" placeholder="Talle" value="<?php echo"$talle";?>">
      <label>Precio</label>
      <input type="text" name="precio" placeholder="Precio" value="<?php echo"$precio";?>">
      <label>Imagen</label>
      <input type="file" name="imagen" placeholder="Imagen">
      <input type="submit" name="guardar_cambios" value="Guardar Cambios">
      <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
    </form>

   <?php
   if(array_key_exists('guardar_cambios',$_POST)){
     $tipo_de_prenda=$_POST['tipo_de_prenda'];
     $marca=$_POST['marca'];
     $talle=$_POST['talle'];
     $precio=$_POST['precio'];
     $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta="UPDATE ropa SET tipo_de_prenda='$tipo_de_prenda', marca='$marca', talle='$talle', precio='$precio',imagen='$imagen' WHERE id=$id";
    mysqli_query($conexion,$consulta);

    header('location:index.html');
   }
   ?>
  </body>
</html>
